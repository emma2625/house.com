<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>
<body>

    <nav>
        <a href="{{ route('homepage') }}"> Home </a>
        <a href="{{ route('service.page') }}"> Services </a>
        <a href="{{ route('faq.page') }}"> Faq </a>
        <a href="{{ route('products.page', [
            'item' => "Samsung",
            'stock' => 10
        ]) }}"> Iphone Product </a>
    </nav>

    

    <img src="{{ asset('nathan-cima-n2sy8zlngYo-unsplash.jpg') }}" width="300" alt="">

</body>
</html>