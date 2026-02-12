<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .profile-card {
            background: white;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            font-size: 1.75rem;
            font-weight: 600;
            color: #111;
            margin-top: 0;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 0.75rem;
        }

        .info {
            background: #f9f9f9;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }

        .info-item {
            margin-bottom: 1rem;
            display: flex;
            flex-direction: column;
        }

        .info-item:last-child {
            margin-bottom: 0;
        }

        .label {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #777;
            margin-bottom: 0.25rem;
        }

        .value {
            font-size: 1.1rem;
            color: #111;
            font-weight: 500;
            word-break: break-word;
        }

        .value.password {
            font-family: monospace;
            color: #888;
            background: #eee;
            padding: 0.3rem 0.6rem;
            border-radius: 4px;
            display: inline-block;
        }

        button {
            width: 100%;
            padding: 0.8rem;
            background: #111;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 0.95rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
        }

        button:hover {
            background: #333;
        }

        form {
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>
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

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Выйти</button>
        </form>
        <form action="{{ route('changepass') }}" method="get">
            @csrf
            <button type="submit">Сменить пароль</button>
        </form>
    </div>
</body>
</html>