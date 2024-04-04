<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
include "connection.php";
echo "THANK YOU! <br> Form details updated  to database successfully";
  echo "<br>";
  echo "<br>";
  ?>

<body>

  <form method="post"  action="data.php" >
    
    <input type="submit" name="view" value="VIEW FILLED DETAILS">  
  </form>
  
</body>
</html>