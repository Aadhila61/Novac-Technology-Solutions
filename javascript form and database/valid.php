<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<style>
#nav-img{
        height:80px;
         width:215px;
        padding-left: 15px;
        padding-top: 10px;
    }
    #bg-img{
        background-image: url(https://www.novactech.in/campaign/assets/img/education/banner.jpg);
        /* width:max-content; */
    }
    #text{
        padding-top: 35px;
        font-weight: 500px;
    }
    #text-align{
        padding-left: 100px;
        color: white;
    }
    #span{
        font-size: larger;
    }
    #form{
        background-color:transparent;
        padding-top: 10px;
        padding-right: 40px;
        background-color: rgb(47,160,132);
        font-size: 15px;
        padding-left:15px;
    }
    #button{
        width: 250px;
        height: 40px;
        text-align: center;
        margin-left: 80px;
        /* border-radius: 10%; */
    }
    #color{
        color: white;
        font-size: 15px;
        text-align: left;
    }
    #pad{
        padding-right: 40px;
    }
    #heading{
        color: white;
        text-align: center;
        font-size: 20px;
        padding-bottom: 20px;
    }
    .form-control{
        
    }

</style>



<?php

include "connection.php";

$name = $email = $phone = $password = $city = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST["name"]);
    $email = ($_POST["email"]);
    $phone = ($_POST["phone"]);
    $password =($_POST["password"]);
    $city = ($_POST["city"]);

    // Check if all required fields are filled
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($password)) {
        $sql = "INSERT INTO sampla (name, email, phone, password, city) VALUES ('$name', '$email', '$phone', '$password', '$city')";
        
        if ($conn->query($sql) === TRUE) {
            // Redirect after successful insertion
            header("Location: submit.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "All fields are required";
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


<div class="navbar">
         <img src="logo.svg" id="nav-img"> 
    </div> 
    <section id="bg-img">
        <div class="row">
            <div class="col-md-7" id="text">  <h1 id="text-align">Revamp the training and learning<span id="span"> Immersive Technologies</span> <br>in the fray</h1>
            </div>
            <div class="col-md-4">
                
                        <div class="row" id="form">

                        <form id="myform" method="post"  action=valid.php >

        <div class="form-group ">
        <div class="col-md-12"> 
        <label for="name"  id="color">Name:</label>
        <input type="text" id="name"   class="form-control" placeholder="name"  onkeyup="validateName()" name="name"  
        style="width:400px;"value="<?php echo isset($_POST['name'])? $_POST['name']:'';?>">
        <span id="nameErr" style="color: red;"></span><br>
        </div></div>

         <div class="form-group">
        <div class=" col-md-12">
        <label for="email"  id="color">Email:</label>
        <input type="email" id="email"  class="form-control" placeholder="email" onkeyup="validateEmail()" 
        name="email" style="width:400px;" value="<?php echo isset($_POST['email'])? $_POST['email']:'';?>">
        <span id="emailErr" style="color: red;"></span><br>
        </div></div>


        <div class="form-group">
        <div class="form-group col-md-12">
        <label for="phone"  id="color">Phone Number:</label>
        <input type="tel" id="phone"  class="form-control" placeholder="phone"  onkeyup="validatePhone()"  
        name="phone" style="width:400px;" value="<?php echo isset($_POST['phone'])? $_POST['phone']:'';?>" >
        <span id="phoneErr" style="color: red;"></span><br>
        </div></div>

        <div class="form-group">
        <div class="form-group col-md-12">

        <label for="password" id="color">Password</label>
        <input type="password" id="password" onkeyup="validatePassword()" 
        name="password"  class="form-control" placeholder="phone" style="width:400px; " value="<?php echo isset($_POST['password'])? $_POST['password']:'';?>">
        <span id="passwordErr" style="color: red;"></span><br>
</div></div>


        <div class="form-group">
        <div class="form-group col-md-12">
        <label for="inputcity" id="color">Select city</label>
        <select id="inputState" class="form-control"placeholder="phone"name="city" style="width:400px;">
        <option selected>Choose...</option>
        <option>chennnai</option>
        <option>Madurai</option>
        <option>trichy</option>
        </select>
        </div>

        <div class="form-group">
                            <div class="form-group col-md-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck" id="color">
                                (I consent Novac Technology Solutions to use my data for contacting through Call/SMS/Email)
                            </label>
                          </div></div>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-info" id="button">Submit</button>
                        </div>




    </form>
    <script src="script.js"></script> 
</body>
</html> 
                            
          