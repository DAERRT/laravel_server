@extends('layouts.mainLayout')

@section('title', 'Смена пароля')

@section('content')
    <form class="password-change-form" method="POST" action="{{ route('changepass') }}">
        @csrf
        
        <h2>Изменение пароля</h2>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if($errors->any() && !$errors->has('current_password') && !$errors->has('new_password'))
            <div class="error-general">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <div>
            <label>Текущий пароль</label>
            <input type="password" name="current_password" required>
            @error('current_password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Новый пароль</label>
            <input type="password" name="new_password" required>
            <span class="hint">Минимум 8 символов</span>
            @error('new_password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Подтверждение пароля</label>
            <input type="password" name="new_password_confirmation" required>
        </div>

        <button type="submit">Изменить пароль</button>
        <a href="{{ url()->previous() }}">Назад</a>
    </form>
@endsection