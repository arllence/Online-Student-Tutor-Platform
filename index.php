<?php
$title = 'Student Tutor';
include_once('head.php');
?>
        <section id="banner">
          <div class="container">
            <br> 
            <h1>Stuck in Class? Don't understand what the Lecturer is Saying?</h1>
            <h3>Find All the Help from our Site! Any unit!</h3>
            <?php
                 if(!isset($_SESSION['email'])){
                     echo "
                         <p>
                         <br>
                            <a href='login.php' class='sign'>Log In</a>
                            &nbsp; &nbsp;
                            <a href='signup.php' class='sign'>Sign Up</a>
                         </p>
                     ";             
                 }else{
                         echo "<div id='dots'><p>. . .</p></div>";
                     }
   
         ?>
          </div>
        </section>
<?php
include_once('footer.php');
?>
