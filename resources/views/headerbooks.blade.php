<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="/homepage" class="nav-link" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="/movies" class="nav-link ">Movies List</a></li>
            <li class="nav-item"><a href="/books" class="nav-link active">Books List</a></li>
          </ul>
        </header>
      </div>

    @yield('content')
</body>
</html>

