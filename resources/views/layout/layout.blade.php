
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>New Shanghai Corner</title>
        <meta name="author" content="Mike Yang">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap/css/bootstrap.min.css')}}">
        <script src="https://kit.fontawesome.com/e8bbed1e5b.js" crossorigin="anonymous"></script>
    </head>
    
    <body>
        @section('navbar')
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="/">New Shanghai Corner Restaurant</a>
                    </button>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('homepage')}}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('menu')}}">Menu</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('artikelpage', ['artikel' => 'test'])}}">parametertest</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('reviews')}}">review</a>
                            </li>
                        </ul>

                </div>
            </nav>
        @show
        <br>
        <br>
        <h1>
            <div class="d-flex justify-content-center pt-4">
            @section('titel')
            Titel
            @show
            </div>
        </h1>
        <main>
            @yield("content")
        </main>
        

    </body>
</html>
