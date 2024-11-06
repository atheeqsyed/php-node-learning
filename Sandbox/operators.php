<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
NULL 
        </title>
    </head>
<body>

<?php 
$a = 4;
$b = 3;
$c = 21;
$d = 20;
if (($a > $b) && ($c >$d)) {
    echo "a is greater then b";
    echo "c is greatert then d";
}
?>
<br />
<?php 
if (!isset($e)) {
    $e = 200;
    }
    echo $e;
?>

<br />
<?php
// dont reject 0 or 0.0
$quantity = "";
if (empty(($quantity) && !is_numeric($quantity))){
    echo "You must enter a quantity";
}

?>

</body>
</html>