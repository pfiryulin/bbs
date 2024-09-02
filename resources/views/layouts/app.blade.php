<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <script src="https://pkprograms.ru/script.js"></script> --}}
    <title>@yield('title') :: Объявления</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li><a href="{{ route('register') }}">Регистрация</a></li>
                <li><a href="{{ route('login') }}">Вход</a></li>
                <li><a href="{{ route('home') }}">Мои объявления</a></li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" value="Выход">
                </form>
            </ul>
        </nav>
        <h1>Объявления</h1>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
</body>
</html>
