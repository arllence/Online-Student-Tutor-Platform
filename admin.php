<?php
ob_start();
?>

<?php

$title = "Admin";
include_once 'head.php';
require_once('database.php') ;
echo '<div class="blog">';

if(!isset($_SESSION['admin']) && $_SESSION['admin'] != 1){
  header("Location: login.php");
}


?>
<br>
<div class="container">
    <br><br>
<table width="100%">
    <h1 style="text-align:center">Site Users</h1>
<thead>
    <tr>
        <th><h2>ID</h2></th>
        <th><h2>NAME</h2></th>
        <th><h2>EMAIL</h2></th>
        <th><h2>ACCOUNT TYPE</h2></th>
        <th><h2>DELETE</h2></th>
    </tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM users";
$run=mysqli_query($database,$sql);
while($row=mysqli_fetch_array($run))
{
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $account=$row['account'];
?>
<tr>
<td><?php echo $id;?> </td>
<td><?php echo $name;?> </td>
<td><?php echo $email;?> </td>
<td><?php echo $account;?> </td>
<td class="center"><?php echo "<a href='delete.php?pid=$id'>Delete</a>"?></td>
</tr>
<?php } ?>
</table>

<style>
    .container{
        font-size: 20px;
    }
     .center a{
        font-size: 25px;
        color: #d6071b;
    }
    table th{
        border: 3px solid #ffff;
        border-collapse: collapse;
    }
    table td{
        border: 3px solid #ffff;
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
</div>
<br>
</div>
<?php
ob_end_flush();
include_once 'footer.php';
?>
