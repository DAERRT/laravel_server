<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view("account.index", compact("user"));
    }

    public function showChangePass(){
        return view("account.changePass");
    }
    public function changePass(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Текущий пароль неверен']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('account')->with('success', 'Пароль изменён');
    }

    public function showUpdate(){
        $user = Auth::user();
        return view("account.update", compact("user"));
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.Auth::id(),
        ]);
        $user = Auth::user();
        if ($user->name != $request->name ) {
            $user->name = $request->name;
        }if($user->email != $request->email){
            $user->email = $request->email;
        }
        $user->save();
        return redirect()->route('account');
    }

    public function updateAvatar(Request $request)
    {

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $user = auth()->user();

        // Удаляем старый аватар
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        // Сохраняем новый
        $path = $request->file('avatar')->store('avatars', 'public');
        
        $user->update(['avatar' => $path]);

        return back()->with('success', 'Аватар обновлён!');
    }

    public function deleteAvatar()
    {
        $user = auth()->user();
        
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
            $user->update(['avatar' => null]);
        }

        return back()->with('success', 'Аватар удалён');
    }
}
