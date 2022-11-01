<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <p><a href="/homepage">Home</a></p>
            <a href="/movies">Movies List</a></p>
            <p><a href="/books">Books List</a></p>
        </nav>
    </header>

    @yield('content')
</body>
</html>

