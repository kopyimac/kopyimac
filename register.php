<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
    
    <div class="row mt-4">
        <div class="col-3 ms-5">
          
         
        <div class="mt-4"> 
            <a href="register.php"><button class="btn btn-primary">Register</button></a>
        </div>
        <div class="mt-4">
            <a href="login.php"> <button class="btn btn-success ">Log  in</button></a>
        </div>
        <div class="mt-4">
            <a href="logout.php"> <button class="btn btn-warning">Log out</button></a>
        </div>
            
    </div>

        <div class="col-6">
            <form method = "POST">
                <div>
                    <label for="name">Name</label>
                    <input type="text" id ="name" name ='name' class="form-control">
                </div>
                <div>
                    <label for="name">Email</label>
                    <input type="email" id ="name" name ='email' class="form-control">
                </div>
                <div>
                    <label for="name">Password</label>
                    <input type="password" id ="name" name='password' class="form-control">
                </div>
                <div>
                    <label for="name">Confirm Password</label>
                    <input type="password" id ="name" name ='comfirm' class="form-control">
                </div>
                <button class= "m-4 btn btn-success" name ='register'>Register</button>
            </form>
        </div>
    </div>
    
</body>
<?php
session_start();
if(isset($_POST['register'])){
$name =$_POST['name'];
$email =$_POST['email'];
$password=$_POST['password'];
$comfirmPassword=$_POST['comfirm'];
if($name !="" && $email != "" && $password != ""){
    if(strlen("$password") >= 6 && strlen("$comfirmPassword") >= 6){
        if($password == $comfirmPassword){
            $_SESSION['email']=$email;
            $_SESSION['password']= password_hash($password,PASSWORD_BCRYPT);
            echo'Register successful';
        }else{
            echo'Password must be same';
        }
    }else{
    echo'Password must be grater than 6.Try again';
    }

}else{
    echo "Need to fill";
};

}
?>
</html>