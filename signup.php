<?php
$title = 'Sign Up | Student Tutor';
include 'head.php';
?>


<section id="login">
<div id="container">

<br>
<form action="signup.inc.php" method="post">
  <h1>Create an Account</h1>
  <?php include 'error/error.php' ?>
  <select name="acc_type" style="margin-bottom:6px;" >
        <option value="">...select Unit...</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Programming">Programming</option>
        <option value="Business">Business</option>
        <option value="Science">Science</option>
        <option value="Design">Design</option>
        <option value="Arts">Arts</option>
</select>
<br>
<input type="text" name="name" placeholder="Name"><br>
<input type="email" name="email" placeholder="Email"><br>
<input type="password" name="pass" placeholder="Password"><br>
<input type="submit" name="submit" value="Sign Up">
</form>
<br>
    <p> Having an Account? <a href="login.php"><strong>Sign In</strong></a></p>
</div>
</section>


<br>
<?php
include 'footer.php';
?>