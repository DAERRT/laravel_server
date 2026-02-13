@extends('layouts.mainLayout')

@section('title', 'Редактирование аккаунта')

@section('content')
    <form class="form-login" method="POST" action="{{ route('update') }}">
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
@endsection
