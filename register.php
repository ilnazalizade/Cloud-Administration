<?php require_once("resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>


<?php





if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];                 
    $address=$_POST['address'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pass = ($_POST['password']) ;
    $cpass = ($_POST['cpassword']) ;


    $query = query("SELECT * FROM users WHERE fname='$fname' && lname='$lname' && address='$address' && email='$email' && username='$username' && password='$pass'");
    confirm($query);

    if(mysqli_num_rows($result)>0){
        $error = 'user is exist';
    }else{
        if($pass != $cpass){
        $error = 'password is not match';
        }else{
        $insert = "INSERT INTO users(fname,lname,address,email,username, password) VALUES('$fname','$lname','$address','$email','$username','$pass')";
        mysqli_query($connection , $insert);
        header('location:login.php');
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

</style>
<body>
    <div class="text-center" >
 <form action="" method="POST">
 <h1 >Registration Form </h1>
        <?php
            if(isset($error)){
                echo '<span class="error-msg">'.$error.'</span>';
            }
        ?>
        <br>
        <br>
        
         <div class="form-group"><label for=""><input type="fname" name="fname"  placeholder="FistName" class="form-control" required></label></div>
         <div class="form-group"><label for=""><input type="lname" name="lname"  placeholder="LastName" class="form-control" required></label></div>
         <div class="form-group"><label for=""><input type="address" name="address"  placeholder="Address" class="form-control" required></label></div>
         <div class="form-group"><label for=""><input type="email" name="email"  placeholder="Email" class="form-control" required></label></div>
         <div class="form-group"><label for=""><input type="username" name="username"  placeholder="username" class="form-control" required></label></div>
         <div class="form-group"><label for=""><input type="password" name="password"  placeholder="Enter password" class="form-control" required></label></div>
         <div class="form-group"><label for=""><input type="password" name="cpassword"  placeholder="Confirm your password" class="form-control" required></label></div>
         

        <input type="submit" value="Register" name="submit" class="btn btn-primary">
        <br>
    <br>
    <br>
    <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
        
    </form>
    </div>
    


</body>
</html>