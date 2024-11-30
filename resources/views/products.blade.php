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


    <br><br>

    <a href="{{ route('products.page', [
        'item' => "iphone",
        'stock' => 12
    ]) }}"> Iphone </a>

    <a href="{{ route('products.page', [
        'item' => "samsung",
        'stock' => 128
    ]) }}"> Samsung </a>
    
    <h1>Product: {{ $product_name }}</h1>
    <h2>Stock: {{ $stock }}</h2>

    <img src="{{ asset('8b2669ed18941f8108f6e6faf4536748.jpg') }}" width="300" alt="">

</body>
</html>