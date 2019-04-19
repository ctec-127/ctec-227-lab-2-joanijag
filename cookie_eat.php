<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php 

echo "<p>" . $_COOKIE['username']. "</p>";
echo "<p>" . $_COOKIE['firstname']. "</p>";
echo "<p>" . $_COOKIE['lastname']. "</p>";

 if (isset($_COOKIE["cookie"])){   
   foreach ($_COOKIE["cookie"] as $key=>$val) {     
    echo $key . ' is '. $val . "<br>\n";   
  } // end foreach 
} // end if  

?>
</body>
</html>









