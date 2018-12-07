 <?php
 $title = 'Student Tutor';
require_once ('head.php');
require_once ('database.php');
?>
<div class="container">
<div id="login">
    <br><br>
<h2 style="color:darkred">Proceed and logout?</h2>
<form method="post" action="logoutreal.php">
<input type="submit" name="submit" value="logout">
</form>
</div>
</div>
        
<br><br>
<?php
require_once ('footer.php');
?>
        
     


