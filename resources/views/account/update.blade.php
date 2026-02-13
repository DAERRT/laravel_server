@extends('layouts.mainLayout')

@section('title', 'Редактирование аккаунта')

@section('content')
    <div class="form-login">
        <div class="under">
            <div class="avatar-preview mb-4">
                <img src="{{ auth()->user()->avatar_url }}" 
                    alt="Avatar" 
                    class="w-32 h-32 rounded-full object-cover border-4 border-gray-200">
            </div>
            {{-- Форма загрузки --}}
        <form action="{{ route('updateava') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <input type="file" name="avatar" accept="image/*" required
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                
                @error('avatar')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                Загрузить аватар
            </button>
        </form>

        {{-- Кнопка удаления (если есть аватар) --}}
        @if(auth()->user()->avatar)
            <form action="{{ route('deleteava') }}" method="POST" class="mt-2">
                @csrf
                <button type="submit" class="text-red-500 text-sm hover:underline">
                    Удалить аватар
                </button>
            </form>
        @endif
        </div>
    <form  method="POST" action="{{ route('update') }}">
        @csrf
        <div>
            <label>Имя пользователя</label>
            <input type="text" name="name" value="{{ $user->name }}" required autofocus>
            @error('name') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Eamil</label>
            <input type="Email" name="email" required value="{{$user->email}}">
            @error('password') <span>{{ $message }}</span> @enderror
        </div>
        <button type="submit">Сохранить</button>
        <a href="{{route('account')}}">Назад</a>
    </form>
    </div>
    


@endsection
