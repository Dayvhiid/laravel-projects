<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pizzas page</h1>
      @foreach($pizzas as $pizza) 
        <div>
          {{ $pizza->name }} wants {{ $pizza->type }} with a {{ $pizza->base }} base
        </div>
      @endforeach
</body>
</html>