@extends('layouts.mainLayout')
@section('title')
Вход
@endsection
@section('content')
    <form class="form-login" method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Пароль</label>
            <input type="password" name="password" required>
            @error('password') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>
                <input type="checkbox" name="remember"> Запомнить меня
            </label>
        </div>
        <button type="submit">Войти</button>
        <a href="{{ route('register') }}">Нет аккаунта? Зарегистрироваться</a>
    </form>
@endsection
