<?php
$title = 'Send Msg | Student Tutor';
include 'head.php';
ob_start();
//if(!isset($_SESSION['email'])){
//    header("Location: login.php?login=false");
//}
?>

<?php
include('database.php');
?>

<?php
if(isset($_POST['send'])){
    $tutormail = $_POST['tutormail'];
    $email  = $_POST['email'];
    $content = $_POST['content'];
    $subject = 'Message from Student-Tutor';
    $from = 'From: '.$email;
    
    mail($tutormail,$subject,$content,$from) or die("Please Connect to the Internet to Continue.<br><a href='contact.php'>Go Back</a>");  
    echo '<br><br><h1 style = "color:green;text-align:center;"> SUCCESS </h1>';
    echo "<p style = 'color:green;text-align:center;'><a style = 'color:#fff;text-align:center;' href='index.php'>Go Back</a></p>";
}
?>

<?php
if (isset($_GET['pid'])){
$id = $_GET['pid'];
// deletes entry from database
$sql="SELECT email FROM users WHERE id='$id'";
$run = mysqli_query($database,$sql) or die(mysqli_error($database));
while($row=mysqli_fetch_array($run)){
        $email=$row['email'];
//        echo $email;
?>


<div class="container cform">
    <br><br>
    <div id="login">
   <form method="post" action="send.php">
       <h1>Send Tutor a Message</h1>
       <input type="email" name="tutormail" value='<?php echo $email ?>' required><br>
       <input type="email" name="email" placeholder="Enter Your Email" required><br>
       <textarea name="content" placeholder="Write Message" rows="8" required></textarea><br>
       <input type="submit" name="send">
   </form>
</div>
</div>


<!--

//header("Location: admin.php?delete=success");
}
//else{
//header("Location: admin.php?delete=unsuccess");
}
-->






<?php }}?>

<br><br><br>
<?php
ob_end_flush();
include 'footer.php';
?>
