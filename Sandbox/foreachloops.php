<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
NULL 
        </title>
    </head>


<?php 
$ages = array (4,8,15,16,23,42);
foreach($ages as $age)
{
    echo "Age: {$age}<br />";
}
?>


<br />

<?php  // foreach using assoc.array
$person  = array (
    "first_name" => "Kelvin",
    "address" => "xyz",
    "city" => "test",
    "state" => "CS"
);
foreach ($person as $attribute => $data){
    $attr_nice = ucwords(str_replace("_", "", $attribute));
     echo "{$attr_nice}: {$data}<br/>";
    // echo "$attribute" . ": ". "$data" . " <br/ >"; 
}


?>



<br />
<?php 
$prices = array (
    "brand new computer" => 2000, 
    "1 month of Lynda.com" => 25,
    "Learning php" => null );

    foreach($prices as $item => $price)
    {
        echo "$item : "; 
        if (is_int($price)) {
            echo "$". $price;
        }
        else {
            echo "priceless";

        }
        echo "<br/>";
    }
    

?>
</body>
</html>