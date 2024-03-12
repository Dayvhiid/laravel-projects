<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Pizza create page</h1>
    <div class="create-pizza"> 
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name"><br>
            <label for="type">Choose pizza type</label>
            <select name="type" id="type">
              <option value="margarita">Margarita</option>
              <option value="peperonni">Pepperonni</option>
              <option value="cheese">Cheese</option>
              <option value="volcano">Volcano</option>
            </select>
            <label for="base">Choose base type:</label>
         <select name="toppings" id="base">
            <option value="Meaty_crusty">Meaty crust</option>
            <option value="Chicken_bolitto">Chicken Bolitti</option>
            <option value="thick_mayo">Thick Mayo</option>
            <option value="lamborghini_fetucino">Lamborghini Fetucino</option>
         </select><br>
        
         <fieldset>
            <label>Extra Topppings</label></br>
            <input type="checkbox" name="assortment[]" value="mushrooms">Mushrooms</br>
            <input type="checkbox" name="assortment[]" value="salmonella">salmonella</br>
            <input type="checkbox" name="assortment[]" value="garlic">Garlic</br>
            <input type="checkbox" name="assortment[]" value="Olives">Olives</br>
         </fieldset>
         <input type="submit" value="Order Pizza">
        </form>
    </div>
</body>
</html>