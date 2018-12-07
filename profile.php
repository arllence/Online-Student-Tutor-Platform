<?php
$title = 'Student Tutor';
include 'head.php';
include 'database.php';
?>

    <?php
            if(isset($_SESSION['email'])){
                echo '<div class="container">';
                echo '<h2>My Profile</h2>';
                echo "<b>User Id:</b> ".$_SESSION['id']."<br>";
                echo "<b>Name:</b> ".$_SESSION['name']."<br>";
                echo "<b>Email:</b> ".$_SESSION['email']."<br>";
                echo "<b>Account Type:</b> ".$_SESSION['account']."<br>";

                echo "<button class=\"button_2\"><a href=\"#\">Update</a></button><br>";
                echo '</div>
                <br><br>
                <section class="container">
                <h2 style="text-align:center">Post to Timeline<a href="create_port.php"> | POST</a></h2>
                </section>
                ';
            }
          ?>

<br>
<center>
<table width='60%'>
    <tr>
        <td>User Id</td>
        <td>Status</td>
    </tr>
<?php
if (isset($_GET['pid'])){
$id = $_GET['pid'];
echo "<br><h2 class='center'>View Gallery | <a href='port.php?pid=$id'>View</a></h2><br>" ;
$sql = "SELECT * FROM status WHERE userid = '$id' ";
$run=mysqli_query($database,$sql);
while($row=mysqli_fetch_array($run))
{
        $id=$row['userid'];
        $content=$row['content'];
?>

<tr>
<td><?php echo $id;?> </td>
<td><?php echo $content;?> </td>
</tr>

<?php }} ?>
</table>
    <br>
</center>
<style>
     .container{
        font-size: 24px;
    }
     .center a{
        font-size: 25px;
        color: #d6071b;
    }
    table th{
        border: 2px solid #ffff;
        border-collapse: collapse;
    }
    table td{
        border: 2px solid #ffff;
        border-collapse: collapse;
        padding: 10px;
    }
    table{
        border-collapse: collapse;
        margin-top: 20px;
    }
    .center{
        text-align: center;
    }
</style>
<br>
<?php
include 'footer.php';
?>