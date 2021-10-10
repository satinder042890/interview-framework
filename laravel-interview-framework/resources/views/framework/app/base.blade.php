<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Example</title>
        <meta name="description" content="Example">
        <link href="/favicon.ico" rel="icon" type="image/x-icon" />

        <!-- Styles -->
        <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css?v={{ $version }}">
        
        <!-- Scripts -->
      
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body id="body">
        <main id="main">
            @yield('content')
        </main>
</html>
