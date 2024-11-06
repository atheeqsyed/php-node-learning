<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
NULL 
        </title>
    </head>
<body>

<?php 
$name = "Atheeqasd";
switch ($name) {
    case "Athiqa":
    echo "Name is Athiqa <br />";
    break;
    case "Atheek":
    echo "Name is Atheek <br />";
    break;
    case "Athiq":
    echo "Name is Athiq <br />";
    break;
    case "Atheeq":
    echo "Name is Atheeq<br />";
    break;
    default:
    echo "None is named as above";
}
?>


<?php 
$year = 2013;
switch(($year -4) % 12) {
    case 0: $zodiac = 'Rat'; break;
    case 1: $zodiac = 'Ox'; break;
    case 2: $zodiac = 'Tiger'; break;
    case 3: $zodiac = 'Rabbit'; break;
    case 4: $zodiac = 'Dragon'; break;
    case 5: $zodiac = 'Snake'; break;
}
echo "{$year} is the year of {$zodiac}, <br />";
?>

<?php  // case with mutiple values

$user_type = 'customer';
switch ($user_type) {
    case 'student':
    echo "Welcome";
    break;
    case 'press':
    case 'customer':
        case 'admin':
        echo "Hello";
        break;

    
}
?>
</body>
</html>