<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  .error {color: #FF0000;}
  </style>

<?php

include "connection.php";

?>


<body>
  <h2> FORM </h2>
<form method="post"  action="" >
    Name: <input type="text" name="name">
    <span class="error">*<?php echo $nameErr;?>  </span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">*<?php echo $emailErr;?></span>
    <br><br>
    Gender:
    <select name="gender" id="gender">
      <option  value="">select</option>
    <option value="m" name="gender">M</option>
    <option value="f" name="gender">F</option>
    <option value="o" name="gender">O</option>
  </select>
    <span class="error">*<?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
  </form>
  

</body>
</html>