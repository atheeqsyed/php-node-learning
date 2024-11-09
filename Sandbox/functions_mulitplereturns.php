<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
FUNCTIONS mulitple returns 
        </title>
    </head>
<body>
<?php
function add_subt($val1, $val2){
    $add = $val1 + $val2;
    $subt= $val1 - $val2;
    return array($add, $subt);
}
$result_array = add_subt(10,5);
echo "Add: " .  $result_array[0]. "<br />";
echo "Subt: " . $result_array[1]."<br/ >" ;

// echo "Add , Sub :" . $result_array. "<br />" ;
list($add_result, $subt_result) = add_subt(20,70);
echo "Add: " . $add_result . "<br />";
echo "Sub: " . $subt_result . "<br />";
?>
</body>
</html>