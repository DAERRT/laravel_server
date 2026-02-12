<!DOCTYPE html>
<html>
<head>
    <title>Вход</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
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
</body>
</html>

<style>
    body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        form {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 320px;
        }

        div {
            margin-bottom: 1.25rem;
        }

        label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            color: #333;
            margin-bottom: 0.35rem;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.6rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #aaa;
        }

        input[type="checkbox"] {
            margin-right: 0.5rem;
        }

        div:has(input[type="checkbox"]) label {
            display: inline;
            font-weight: normal;
        }

        button {
            width: 100%;
            padding: 0.7rem;
            background: #111;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            margin-top: 0.5rem;
        }

        button:hover {
            background: #333;
        }

        span {
            display: block;
            color: #dc2626;
            font-size: 0.8rem;
            margin-top: 0.3rem;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
            text-decoration: none;
            font-size: 0.9rem;
        }

        a:hover {
            color: #000;
        }
</style>