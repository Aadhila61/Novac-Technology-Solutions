<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
include "connection.php";
$id=$_GET['updateid'];
 $sql="select * from data where id=$id";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $id=$row['id'];
   $name=$row['name'];
  $email=$row['email'];
  $gender=$row['gender'];
  if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["gender"])){
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $sqlquery = "update data SET  name='$name', email='$email', gender='$gender' WHERE id=$id";
    $result=$conn-> query($sqlquery);
    if($result){
      header("location:data.php");
    }
    else{
      echo "not updated";
    }}}
    // else{
    //   echo "fill all details";
    // }
    
           ?>

<form method="post" action="">  
   
  Name: <input type="text" name="name" value="<?php echo isset($name)?$name :'';?>">
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo isset($email)?$email :'';?>">
  <br><br>
Gender:
<select name="gender" id="gender" value="<?php echo isset($gender)?$gender :'';?>">
      <option  value="">select</option>
    <option value="m" name="gender"<?php if ($row['gender']=='m')echo 'selected';?>  >M</option>
    <option value="f" name="gender" <?php if ($row['gender']=='f')echo 'selected';?>>F</option>
    <option value="o" name="gender" <?php if ($row['gender']=='o')echo 'selected';?>>O</option>
  </select>
  <br><br>
  <input type="submit" name="submit" value="submit">  
</body>
</html>

