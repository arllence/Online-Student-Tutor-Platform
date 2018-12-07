<?php
ob_start();
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php?login=false");
}
?>

<?php
include('database.php');
?>

<?php
if (isset($_GET['pid'])){
$id = $_GET['pid'];
// deletes entry from database
$sql="DELETE FROM users WHERE id='$id'";
mysqli_query($database,$sql) or die(mysqli_error($database));
header("Location: admin.php?delete=success");
}
else{
header("Location: admin.php?delete=unsuccess");
}
ob_end_clean();
?>
