@extends('layouts.mainLayout')
@section('title')
Регистрация
@endsection
@section('content')
    <form class="form-register" method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label>Имя</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
            @error('name') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
            @error('email') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Пароль</label>
            <input type="password" name="password" required>
            @error('password') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Зарегистрироваться</button>
        <a href="{{ route('login') }}">Есть аккаунт? Войти</a>
    </form>
@endsection