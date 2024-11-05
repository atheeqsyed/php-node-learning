<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
NULL 
        </title>
    </head>
<br>

<body>

Type Juggling <br />
<?php $count = "2"; ?>
Type: <?php echo gettype($count); ?> <br />
<?php $count+= 3; ?>
Type: <?php echo gettype($count); ?> <br /> 


<?Php $cats = "I have" . $count . "cats."; ?>
cats: <?php echo gettype($cats); ?> <br />


<br />

Type casting <br />

<?php settype($count, "integer"); ?>
count: <?php echo gettype($count); ?>


<?php $count2 = (string) $count; ?>
count: <?php echo gettype($count); ?> <br />
count2: <?php echo gettext($count2); ?>

<br/>


<?php $test1 = 3 ; ?>
<?php test2 = 3; ?>
<?php settype($test1, "string"); ?>
<?php (string) $test2; ?>

test1: <?php echo gettext($test1); ?>
test2: <?php echo gettext($test2); ?>
</body>
  
</html>