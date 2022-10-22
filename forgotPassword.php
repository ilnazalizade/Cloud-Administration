<?php require_once("resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<?php

$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<h2 class="text-center">Enter the Email of Your Account to Reset New Password</h2>
<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
<br><br>
<div class="text-center">
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <br><br>
            <div class="send-button">
                <input type="submit" name="forgotSubmit" value="CONTINUE" class="btn btn-primary">
            </div>
            <br>
            <p>You need to
            <a href="resetPassword.php">reset password?</a></p>
        </form>
    </div>
</div>