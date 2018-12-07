<?php
$title = 'Contact | Student Tutor';
include 'head.php';
include 'database.php';
?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $content = $_POST['content'];
    $jmail = 'brianmwashi@gmail.com';
    $subject = 'Message from Student-Tutor';
    $from = 'From: '.$jmail;
    
    mail($email,$subject,$content,$from) or die("Please Connect to the Internet to Continue.<br><a href='contact.php'>Go Back</a>");
    echo '<br><br><h1 style = "color:green;text-align:center;"> SUCCESS </h1>';
}
?>


<div class="container cform">
    <br><br>
    <div id="login">
   <form method="post" action="contact.php">
       <h1>SEND MESSAGE TO ADMIN</h1>
       <input type="text" name="name" placeholder="Enter Your Name" required><br>
       <input type='email' name="email" placeholder="Enter Your Email" required><br>
       <textarea name="content" placeholder="Write Message" rows="8" required></textarea><br>
       <input type="submit" name="submit">
   </form>
</div>
</div>
<br><br><br>
<?php
include 'footer.php';
?>