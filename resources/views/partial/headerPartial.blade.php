<header class="site-header">
    <h3>Мой сайт!</h3>
    <nav>
        <ul>
            <li>
                @auth
                <a href="{{ route('account') }}">Профиль</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">Выйти</button>
                </form>
                @endauth
                @guest
                <a href="{{ route('login') }}">Войти</a>
                <a href="{{ route('register') }}">Зарегистрироваться</a>
                @endguest
            </li>
        </ul>
    </nav>
</header>