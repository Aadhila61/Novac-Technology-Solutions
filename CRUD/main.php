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

$nameErr = $emailErr = $genderErr="";
$name = $email = $gender ="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
  }


    $email = test_input($_POST["email"]);
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
      
      $email = test_input($_POST["email"]);
    }
 


  //$email=(empty($_POST['email']));
  
//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   }
// else if 
//    (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//   //$emailErr = "Invalid email format";
//   // die("connection error");
// }
// else{
//   $email = test_input($_POST["email"]);
// }
  // $email=filter_var($email,FILTER_SANITIZE_EMAIL);
  // $email=filter_var($email, FILTER_VALIDATE_EMAIL);
  //  if (isset($_POST["email"])){
  //   $email = test_input($_POST["email"]);
  //  }
  //  else{
    
  //   die ('invalid mailid');
  //  }


  
  


  // if (empty($_POST["email"])) 
  // $email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
  // {
  //   $emailErr = "Email is required";
  // } else {
  //   $email = test_input($_POST["email"]);
  
  

  if (empty($_POST["gender"])) {
    $genderErr = "gender is required";
  } else {
    $gender = ($_POST["gender"]);
  }
 }
  if(!empty($_POST["name"]) && !empty($_POST["email"]) && empty( $emailErr) ){

      $sql = "INSERT INTO data (name, email,gender)
      VALUES ('$name', '$email', '$gender')";

      if ($conn->query($sql)) {

      header("Location: submit.php");
      echo "<br>";
      echo "<br>";
      } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


$conn->close();
?>


<body>
  <h2> FORM </h2>
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  >
    Name: <input type="text" name="name"   value="<?php echo isset($_POST['name'])? $_POST['name']:'';?>" >
    <span class="error">*<?php echo $nameErr;?>  </span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo isset($_POST['email'])? $_POST['email']:'';?>">
    <span class="error">*<?php echo $emailErr;?></span>
    <br><br>
    Gender:
    <select name="gender" id="gender" value="<?php echo isset($_POST['gender'])? $_POST['gender']:'';?>">
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
