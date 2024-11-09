<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<br>
    <head>
        <title>
NULL 
        </title>
    </head>
<body>

<?php 
    $ages = array (4, 8, 12, 15, 26, 46);
 // current pointer value
    echo "1:" . current($ages);
  next($ages);
  echo "2:". current($ages). "<br />";

  next($ages);
  next($ages);
  echo "3: ". current($ages) . "<br / >";



  next($ages);
  next($ages);
  next($ages);
  echo "4:" . current($ages). "<br />";

?>
</body>
</html>