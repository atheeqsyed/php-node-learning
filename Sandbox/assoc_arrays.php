<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
Associative Arrays
        </title>
    </head>
<br>

<?php $assoc = array("first_name" => "kelvin", "last_name" => "Skoa"); ?>
<?php echo $assoc["first_name"]; ?> <br />
<?php echo $assoc["first_name"] . " " . $assoc["last_name"] ?> <br />

<br />

<?php $assoc["first_name"] = "Larry"; ?>
<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?> <br />



<?php // echo $assoc[1]; ?>  <br />


<?php $numbers = array(4,8,15,16); ?>
<?php $numbers = array(0=>4, 1=> 8, 2=> 15, 3=>16); ?>
<?php echo $numbers[0] ?>
   </body>  
</html>