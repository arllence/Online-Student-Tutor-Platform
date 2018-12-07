<?php
$title = 'Log In';
include 'head.php';
?>
<?php
if(isset($_SESSION['email'])){
    header('Location: index.php?login=true');
}
?>

<section id="login">
    <div class="container">
        <br>
        <form action="login.inc.php" method="post">
        <h1>Log In</h1>
        <?php include 'error/errorlogin.php';?>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="Log In">
</form>
    <br>
    <p> Don't have an Account? <a href="signup.php"><strong>Sign Up</strong></a></p>
</div>
</section>
<br>
<?php
include 'footer.php';
?>