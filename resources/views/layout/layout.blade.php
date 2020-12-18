
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>New Shanghai Corner</title>
        <meta name="author" content="Mike Yang">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap/css/bootstrap.min.css')}}">
    </head>
    
    <body>
        @section('navbar')
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#">New Shanghai Corner Restaurant</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/menu">Menu</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="/create">review</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @show
        <br>
        <br>
        <h1>
            @section('titel')
            Titel
            @show
        </h1>
        <main>
            @yield("content")
        </main>
        

    </body>
</html>
