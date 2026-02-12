<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body>
    <header>
        <h3>Мой сайт!</h3>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('account') }}">Профиль</a>
                </li>
            </ul>
        </nav>
    </header>
    <h1>Добро пожаловать!</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis, dolores in maxime sapiente veniam 
        aliquid accusamus a quos explicabo hic beatae. Nesciunt culpa rem sint, alias repellat vitae eaque accusantium.</p>
</body>
<style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #fafafa;
            margin: 0;
            padding: 0;
            color: #1a1a1a;
            line-height: 1.6;
        }

        header {
            background: white;
            padding: 1rem 2rem;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        h3 {
            margin: 0;
            font-weight: 600;
            font-size: 1.25rem;
            color: #111;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 1.5rem;
        }

        nav a {
            text-decoration: none;
            color: #555;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        nav a:hover {
            color: #000;
        }

        main {
            max-width: 720px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }

        h1 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #111;
        }

        p {
            color: #444;
            font-size: 1.1rem;
            margin-top: 0;
        }

        @media (max-width: 600px) {
            header {
                flex-direction: column;
                gap: 0.75rem;
                align-items: flex-start;
            }
            
            nav ul {
                flex-wrap: wrap;
                gap: 1rem;
            }
            
            h1 {
                font-size: 1.75rem;
            }
        }
</style>
</html>