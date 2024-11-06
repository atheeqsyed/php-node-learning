<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
        Break
        </title>
    </head>

<body>
<?php 
for ($count =0; $count<=10; $count++){
    if($count ==5){  
       // {continue;
       break;
        }
    
    echo "{$count}" . " ," ;
}

?>


<?php  // loop inside the loop with break
for ($i=0; $i<=5; $i++){
    if ($i % 2 ==0) { continue(1); }
    for ($k=0; $k<=5; $k++){
        if($k==3) 
      {break;}  
       // { continue(2); }
    echo "{$i}" . "-". "{$k}". "<br />";
}
}


?>
</body>
</html>