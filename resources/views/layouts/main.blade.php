<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Pages</title>
    <style>
        nav {
            background-color: red;
            padding: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }
    </style>

    @vite(['resources/css/style.css'])
</head>
<body>

    <nav>
        <a href="">Home</a>
    </nav>

    @yield('content')
    
</body>
</html>