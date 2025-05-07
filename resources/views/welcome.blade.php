<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divina Fragancia</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #121212; /* Fondo oscuro */
            color: white;
            font-family: Arial, sans-serif;
            font-size: 2rem;
            text-align: center;
        }
        .top-right {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .top-right a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1rem;
            border: 1px solid white;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .top-right a:hover {
            background-color: white;
            color: #121212;
        }
    </style>
</head>
<body>

    <!-- Botones de Login y Register -->
    <div class="top-right">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </div>

    <!-- Título principal -->
    <div>
        Divina Fragancia
    </div>

</body>
</html>
