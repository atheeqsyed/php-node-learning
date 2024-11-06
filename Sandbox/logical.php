<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
NULL 
        </title>
    </head>
<body>

<?php 
$a = 3;
$b= 3;
if ($a>$b) {
    echo "a is graeter then b value";
}  elseif ($a < $b){
    echo "b is greater";
} else
{
    echo "a equals b";
}
?>
<br />
<br />
<?php // new users 
$new_usr = true;
if ($new_usr) {
echo "Welcome Buddy!";
} ?>


<br />
<br />
<?php
$num = 20;
$den = 5;
if ($den > 0) {
    $result = $num / $den;
    echo "Result: {$result}";
}
?>
</body>
</html>