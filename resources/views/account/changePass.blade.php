<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение пароля</title>
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
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            width: 100%;
            max-width: 360px;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 1.75rem;
            font-size: 1.5rem;
            font-weight: 600;
            color: #111;
            text-align: center;
        }

        div {
            margin-bottom: 1.25rem;
            position: relative;
        }

        label {
            display: block;
            font-size: 0.85rem;
            font-weight: 500;
            color: #555;
            margin-bottom: 0.35rem;
            letter-spacing: 0.3px;
        }

        input[type="password"] {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }

        input[type="password"]:focus {
            outline: none;
            border-color: #999;
        }

        button {
            width: 100%;
            padding: 0.8rem;
            background: #111;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 0.5rem;
        }

        button:hover {
            background: #333;
        }

        .error {
            display: block;
            color: #dc2626;
            font-size: 0.8rem;
            margin-top: 0.4rem;
            padding-left: 0.25rem;
        }

        .success {
            background: #ecfdf5;
            color: #065f46;
            padding: 0.75rem;
            border-radius: 6px;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            border: 1px solid #a7f3d0;
        }

        .error-general {
            background: #fef2f2;
            color: #991b1b;
            padding: 0.75rem;
            border-radius: 6px;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            border: 1px solid #fecaca;
        }

        .hint {
            font-size: 0.75rem;
            color: #888;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('changepass') }}">
        @csrf
        
        <h2>Изменение пароля</h2>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if($errors->any() && !$errors->has('current_password'))
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
            @error('new_password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Изменить пароль</button>
        <a href="{{ back() }}">Назад</a>
    </form>
</body>
</html>