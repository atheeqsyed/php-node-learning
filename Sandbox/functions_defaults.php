<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
FUNCTIONS: defaults 
        </title>
    </head>
<body>
<?php
function paint($room="office",$color= "red"){
    return "the color of {$room} is {$color} ". "<br/>";

}

echo paint();
echo paint("bedroom", "red");
echo paint("bedroom", "blue");

?>
</body>
</html>