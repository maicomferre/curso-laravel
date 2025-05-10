<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP - laravel</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="/src/bootstrap.min.css" />
        <script type="text/javascript" language="script" src="/src/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" language="script" src="/src/jquery-3.7.1.min.js"></script>
        <script type="text/javascript" language="script" src="/src/sweetalert2@11.js"></script>
    </head>
    <body>
        <div class="container-fluid d-flex justify-content-center p-2 position-fixed">
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">{{ session()->get('success') }}</div>
            @endif

            @if(session()->has('faill'))
                <div class="alert alert-danger" role="alert">{{ session()->get('faill') }}</div>
            @endif
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>


