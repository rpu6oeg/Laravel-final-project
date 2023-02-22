<header>
    <div class="osnova-header">
        <h1><a href="#">БИБЛ</a></h1>
        <nav class="menu-navigation">
            <ul>
                <li class="li-menu-navigation"><a href="#">О нас</a></li>
                <li class="li-menu-navigation"><a href="#">Контакты</a></li>
                <li class="li-menu-navigation"><a href="#">Главная</a></li>
            </ul>
        </nav>
        <div class="header-buttons">
            @auth
                <a href="{{route('logout')}}" class="registration-button">Выйти</a>
            @endauth
            @guest
                <a href="{{route('page.register')}}" class="registration-button">Регистрация</a>
                <a href="{{route('page.auth')}}" class="auth-button">Войти</a>
                @endguest
        </div>
    </div>
</header>

