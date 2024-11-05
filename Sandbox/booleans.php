<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
Array Functions
        </title>
    </head>
<br>

<body>
<?php   
$result1 = true;
$result2 = false;  
?>
 
  Result1: <?php $result1; ?>

 Result2: <?php $result2; ?>

 result2 is boolean?: <?php echo is_bool($result2); ?>
<br />

<?php 
$number = 3.14;
if(is_float($number)) {
    echo "It is float";
}
?>
</body>
  
</html>