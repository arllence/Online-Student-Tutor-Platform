<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">
    <title><?php echo $title ?></title>
    <?php session_start(); ?>
  </head>
  <body>
  <header>
      <div class="container">
          <h1>Student Tutor</h1>
        <nav>
          <ul id="navul">
            <li><a href="index.php">Home</a></li>
              <li><a href="#">Units</a>
                    <ul id="navuli">
                      <li><a href="mathematics.php">Mathematics</a></li>
                      <li><a href="programming.php">Programming</a></li>
                      <li><a href="business.php">Business</a></li>
                      <li><a href="science.php">Science</a></li>
                      <li><a href="design.php">Design</a></li>
                      <li><a href="arts.php">Arts</a></li>
                    </ul>    
              </li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              
                <?php
                    if(isset($_SESSION['email'])){
                        $id = $_SESSION['id'];
                            echo "
                            <li><a href='profile.php?pid=$id'>Profile</a></li>    
                            <li><a href='logout.php'>Logout</a></li>                           
                         ";
                        } 
                    if(isset($_SESSION['admin'])){
                        if($_SESSION['admin']== 1)
                            echo '
                            <li><a href="admin.php">Admin</a></li>                              
                         ';
                        }
                ?>  
          </ul>
        </nav>
      </div>
    </header>