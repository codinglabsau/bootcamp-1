<!DOCTYPE html>
<html>
<head>
<title>@yield('title', 'CLMovieDB')</title>
<link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <nav>
            <h1 class="logo"><a href="/">CLMovieDB</a></h1>
            <div class="search">
                <input type="text" name="search" placeholder="Search for movies">
                <button>
                    <img src="/css/images/search.png" class="h-8 w-8 self-center">
                </button>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <p> Molestias totam et quia. Architecto aut explicabo delectus odio odit veritatis. Atque aut illo quis. Modi tenetur alias sed nihil commodi reiciendis consequatur quaerat.  </p>
    </footer>
</body>
</html>
