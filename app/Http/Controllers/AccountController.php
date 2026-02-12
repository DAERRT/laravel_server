<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
}
