<?php
$title = 'Student Tutor';
include 'head.php';
include 'database.php';
$page='business';
?>

<div class="container">
    <br><br>
<table width="100%">
    <h1 style="text-align:center">Business Tutors</h1>
<thead>
    <tr>
        <th><h2>ID</h2></th>
        <th><h2>NAME</h2></th>
        <th><h2>EMAIL</h2></th>
        <th><h2>VIEW PROFILE</h2></th>
        <th><h2>SEND MESSAGE</h2></th>
    </tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM users WHERE account = '$page' ";
$run=mysqli_query($database,$sql);
while($row=mysqli_fetch_array($run))
{
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
?>
<tr>
<td><?php echo $id;?> </td>
<td><?php echo $name;?> </td>
<td><?php echo $email;?> </td>
<td class="center"><?php echo "<a href='profile.php?pid=$id'>View</a>"?></td>
<td class="center"><?php echo "<a href='send.php?pid=$id'>Send</a>"?></td>
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
<br><br><br>
<?php
include 'footer.php';
?>