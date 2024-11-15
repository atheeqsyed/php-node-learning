<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
FUNCTIONS: defaults 
        </title>
    </head>
<body>
<?php
$number = 100;
$string = "Bug?";
$array = array(1 => "Homepage", 2 => "About us");

var_dump ($number); 
var_dump($string);
var_dump($array);
?><br />

<?php 

print_r( get_defined_vars());
// test
?>
</body>
</html>