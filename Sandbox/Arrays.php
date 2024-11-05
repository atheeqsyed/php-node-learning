<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
Arrays
        </title>
    </head>
<br>
   <body>
<?php 
$numbers = array(4,8,15,16,23,42); 
echo $numbers[1];
?>

<?php 
$mixed = array (6, "fox", "dog", array("x", "y", "z")); ?>
<?php // echo $mixed[2]; ?> <br />
<?php //echo $mixed[3]; ?> <br />

<?php // echo $mixed ?> <br />
<pre>
<?php echo print_r($mixed); ?>
</pre>
 <br />
 <?php echo $mixed[3][2]; ?> <br />


 <br />

 <?php $mixed[2] = "cat"; ?>
 <?php $mixed[4] = "mouse"; ?>
 <?php $mixed[] = "horse"; ?>

 <pre>
<?php echo print_r($mixed); ?>
</pre>


<?php $array = [1,2,3]; 
echo $array[1];
?>
   </body>  
</html>