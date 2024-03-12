<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is the show page</h1>
    <p>Order for {{ $pizza->name}}</p>
    <p class="type">Type - {{$pizza->type}} </p>
    <a href="/pizzas">Home</a>
    <p>Extra toppings
        <ul>
            @foreach($pizza->assortment as $assortment)
               <li> {{ $assortment}} </li>
            @endforeach
        </ul>
    </p>
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE');
        <button>Complete Order</button>
    </form>
</body>
</html>