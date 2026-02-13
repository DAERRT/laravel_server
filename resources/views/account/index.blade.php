@extends('layouts.mainLayout')

@section('title', 'Личный кабинет')

@section('content')
    <div class="profile-card">
        <h1>Личный кабинет</h1>

        <div class="info">
            <div class="info-item">
                <span class="label">Имя</span>
                <span class="value">{{ $user->name }}</span>
            </div>
            <div class="info-item">
                <span class="label">Email</span>
                <span class="value">{{ $user->email }}</span>
            </div>
        </div>

        <div class="profile-actions">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="button-logout" type="submit">Выйти</button>
            </form>
            <form action="{{ route('changepass') }}" method="get">
                @csrf
                <button class="button-chagePass" type="submit">Сменить пароль</button>
            </form>
            <form action="{{ route('update') }}" method="get">
                @csrf
                <button class="button-update" type="submit">Редактировать профиль</button>
            </form>
        </div>
    </div>
@endsection
