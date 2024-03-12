<style>
    .box{
        border: 1px solid black;
        height: 10%;
        width: 50%;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show all</title>
</head>
<body>
    @foreach($pizzas as $pizza)
      <div class="box"> {{ $pizza->name }} id owner of this order</div>
    @endforeach
</body>
</html>