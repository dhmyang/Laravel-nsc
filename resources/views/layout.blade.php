
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Titel hier</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Mike Yang">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style.css">
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            @section('navbar')
            Navigation bar here
            @show
        </nav>


        @yield("content")

    </body>
    <script src="./script.js"></script>
</html>
