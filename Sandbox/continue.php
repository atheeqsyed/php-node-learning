<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
        Continue
        </title>
    </head>

<body>
<?php 
for ($count=0; $count <=10; $count++){
    if ($count % 2 == 0){
        continue ;
    }
    echo "{$count}" . " ";
}

?>
<br />
<?php

$count = 0;
while ($count <=10){
    if ($count == 5){
        $count++;
        continue;
    }
    echo $count;
    $count++;
}
?>


<br />

<?php
for ($i=0; $i<=5; $i++){
    if($i % 2 ==0) { continue;}
    for ($k=0; $k <=5;$k++){
        if ($k ==3) {continue;}
        echo $i. "_" . $k . "<br />";
        }
}

?>
</body>
</html>