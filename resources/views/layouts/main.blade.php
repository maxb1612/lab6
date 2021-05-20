<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
<header class="top-header">
    <div class="wrapper">
        <nav class="left-nav">
            <ul>
                <li>
                    <a href="/lab6/public" class="logo">
                        <img src="./img/logo.svg" alt="logo"/>
                    </a>
                </li>
                <li><a href="/lab6/public/category">Піца</a></li>
                <li><a href="/lab6/public/category">Салати</a></li>
                <li><a href="/lab6/public/category">Напої</a></li>
            </ul>
        </nav>
        <nav class="right-nav">
            <ul>
                <li>
                    <a href="/lab6/public/profile" class="login-button">Вхід <i class="fas fa-user"></i></a>
                </li>
                <li>
                    <a href="/lab6/public/cart">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main>
   @yield('main')
</main>

<footer>
</footer>
</body>
</html>
