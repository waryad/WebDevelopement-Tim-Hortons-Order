<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tim Hortons Order</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body id ="bodystyle">
       
         <img  src="_images/tim.jpg" class="image" alt="tim" width="550" height="300">

        <H2>Welcome To Tim Horton's!</H2>
        <div id="content">
<form action="order.php" method="post">
                <h1>Give us some numbers...</h1>	
				<div id="data">
                 <label for="quantity">Number of coffes:</label>
                  <input type="number" id="NumberCoffes" name="NumberCoffes" min="1" max="5" required>       
                  <br>
                  <br>
                 <label>Size: </label>
                    <select name="Cup" id="sizeCoffes">
                    <option value="small">small</option>
                    <option value="medium">medium</option>
                    <option value="large">Large</option>
                    <option value="xlarge">extra large</option>
                    </select> 
                   <br>
                   <br>
                <label for="quantity">How many creams: </label>
                <input type="number" id="Numbercreams" name="Numbercreams" min="1" max="5" required>
                   <br>
                   <br>
                <label for="quantity">How many sugars: </label>
                <input type="number" id="Numbersugars" name="Numbersugars" min="1" max="5" required>
                   <br>
				</div>
				<div id="buttons">
                    <input type="submit" class="button" name="submit" value="Order coffee"><br>
				</div>
            </form>
        </div>
    </body>
</html>
