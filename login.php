<?php require_once("resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!-- Page Content -->
<div class="container">

    <header>
        <h1 class="text-center">Login</h1>
        <h3 class="text-center bg-warning"><?php display_message();    ?></h3>
        <div class="col-sm-4 col-sm-offset-5">
            <form class="" action="" method="post" enctype="multipart/form-data">

            <?php  login_user(); ?>
                <div class="form-group"><label for="">
                        username<input type="text" name="username" class="form-control"></label>
                </div>
                <div class="form-group"><label for="password">
                        Password<input type="password" name="password" class="form-control"></label>
                </div>
                <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>&nbsp;&nbsp;
      <a href="forgotPassword.php">Forgot password?</a>
      
    

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                    <a href="register.php" class="btn btn-primary">Sign up</a>
                    <input type="reset" class="btn btn-primary">
                    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    
                  
                </div>
            </form>
        </div>


    </header>


</div>



<?php include(TEMPLATE_FRONT . DS . "footer.php");    ?>