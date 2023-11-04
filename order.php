<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <title>Yours Tim hortons order</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body  id ="bodystyle2">
 
       <h2>Thank you for the order:</h2>
        <?php
	   
       $Number_of_Coffes= $_POST['NumberCoffes'];
      
        $Coffes = $_REQUEST['Cup']; 

        $How_many_creams= $_POST['Numbercreams']; 
        $How_many_sugars= $_POST['Numbersugars']; 
        $xlargeprice=2.50;
        $largeprice=2.00;
        $mediumprice=1.50;
        $smallprice=1.00;
        $tax=13/100;
        $totalSmall=$smallprice*$Number_of_Coffes+$tax;
        $totalmedium= $mediumprice*$Number_of_Coffes+$tax;
        $totallarge= $largeprice*$Number_of_Coffes+$tax;
        $totalxlarge=$xlargeprice*$Number_of_Coffes+$tax;
        ?>
        
        <?php
 
       switch($Coffes){
          case "small": 
            for ($i=1; $i<= $Number_of_Coffes; $i++) 
            echo '<img src="_images/cup.jpg" width="50" height="100">'; 
            echo '<img src="_images/plus.jpg"  width="50" height="50">'; 
            for ($i=1; $i<=$How_many_creams; $i++) 
            {
               
              echo '<img src="_images/cream.jpg" width="80" height="80" >'; 
    
            }
    
            echo '<img src="_images/plus.jpg" width="20" height="50">'; 
            
            for ($i=1; $i<=$How_many_sugars; $i++) 
            {
               
              echo "<img src='_images/sugar1.jpg' width='100' height='100'>"; 
    
            }
            echo "<br><br>\nTotal amount is  $smallprice*$Number_of_Coffes+$tax (tax) is = $ $totalSmall";
            break;
          case "medium":
            for ($i=1; $i<= $Number_of_Coffes; $i++) 
            echo '<img src="_images/cup.jpg" width="100" height="150">'; 
            echo "<img src='_images/plus.jpg'>"; 
            for ($i=1; $i<=$How_many_creams; $i++) 
            {
               
              echo "<img src='_images/cream.jpg'>"; 
    
            }
    
            echo "<img src='_images/plus.jpg'>"; 
            
            for ($i=1; $i<=$How_many_sugars; $i++) 
            {
               
              echo "<img src='_images/sugar1.jpg'  width='100' height='100'>"; 
    
            }
            echo "<br><br>\nTotal amount is  $mediumprice*$Number_of_Coffes+$tax (tax) is = $ $totalmedium";
            break;
        
          case "large":
            for ($i=1; $i<= $Number_of_Coffes; $i++) 
            echo '<img src="_images/cup.jpg" width="150" height="200">';  
            echo "<img src='_images/plus.jpg'>"; 
            for ($i=1; $i<=$How_many_creams; $i++) 
            { 
              echo "<img src='_images/cream.jpg'>"; 
            }
    
            echo "<img src='_images/plus.jpg'>"; 
            
            for ($i=1; $i<=$How_many_sugars; $i++) 
            {
              echo "<img src='_images/sugar1.jpg'  width='100' height='100'>"; 
            }
            echo "<br><br>\nTotal amount is  $largeprice*$Number_of_Coffes+$tax (tax) is = $ $totallarge";
            break;
          case "xlarge":
            for ($i=1; $i<= $Number_of_Coffes; $i++) 
            echo '<img src="_images/cup.jpg" width="200" height="300">';  
            echo "<img src='_images/plus.jpg'>"; 
            for ($i=1; $i<=$How_many_creams; $i++) 
            { 
              echo "<img src='_images/cream.jpg'>"; 
            }
                echo "<img src='_images/plus.jpg'>"; 
            
            for ($i=1; $i<=$How_many_sugars; $i++) 
            {  
              echo "<img src='_images/sugar1.jpg'  width='100' height='100'>"; 
            }
            echo "<br><br>\nTotal amount is  $xlargeprice*$Number_of_Coffes+$tax (tax)is =$ $totalxlarge";
            break;
  
      default;
      }   

     ?>
    
    <?php echo "<br> <br> Please click below to place new order :";  ?>
                    <a href="index.php" >New Order</a>
    </body>
</html>