<?php
$title = 'Tutor | Create Profile';
require_once ('head.php');
require_once ('database.php');
?>
<br>
<?php
if(!isset($_SESSION['email'])){
   header('Location: login.php?login=false');
}
                if(isset($_POST['post'])){

                    $content=($_POST['content']);
                    $user_id = $_SESSION['id'];
                    $email = $_SESSION['email'];

                    $content=mysqli_real_escape_string($database, $content);
                  
                    $sql="INSERT INTO status (userid,content) VALUES ('$user_id','$content')";
                  
                    if($content==""){
                      echo "Please complete your post!";
                      return;
                    }
                    mysqli_query($database, $sql);
                    header("Location: create_port.php?post=success");
                  }

                



                  if(isset($_POST['data'])){
                    $file =$_FILES['file'];
                    
                    $user_id = $_SESSION['id'];
                 
                     $fileName = $_FILES['file']['name'];
                     $fileTmpName = $_FILES['file']['tmp_name'];
                     $fileSize = $_FILES['file']['size'];
                     $fileError = $_FILES['file']['error'];
                     $fileType = $_FILES['file']['type'];
                     
                  
                     $fileExt = explode('.',$fileName);
                     $fileActualExt = strtolower(end($fileExt));
                   
                    // print_r($fileExt);
                     $picname = $fileExt[0];
                     $picname = preg_replace("!-!","",$picname);
                     $picname = ucwords($picname);
                     //echo $fileExt[0];
                 
                     $allowed = array('jpg', 'jpeg','png');
                   
                     if(in_array($fileActualExt, $allowed)){
                         if($fileError === 0){
                             if($fileSize < 5000000){
                                  $fileNameNew = uniqid('', true).".".$fileActualExt;
                                 $fileDestination = 'uploads/'.$fileNameNew;
                                // $img_dir = $fileDestination;
                                 move_uploaded_file($fileTmpName, $fileDestination);
                                 $sql = "INSERT INTO images (user_id,img_dir) VALUES ('$user_id','$fileDestination')";
                                // mysqli_query($database, $sql); 
                                 mysqli_query($database,$sql) or die(mysqli_error($database));
                     
                                //  header("Location: create_port.php?post=success");
                                echo "<div class='container upload'><h3>Upload Success...</h3></div>";
                               
                             }else{
                                 echo "<div class='container'><p style='color=red;text-align:center'>Your file is too big!</p></div>";
                             }
                         }else{
                             echo"<div class='container'><p style='color=red; text-align:center'>There was an error uploading the file</p></div>";
                         }
                     }else{
                         echo "<div class='container'><p style='color=red;text-align:center'>You cannot upload files of this type!</p></div>";
                     }
                 }

?>
<!--IMAGES $ PDF-->
<br>
<br>
<div class="container">
<h2 style="text-align:center">Create your Profile</h2>
</div>
<br>
<div id="login" class="post">

            <div class="container">
                <br>
             <form action="create_port.php" method="post" enctype="multipart/form-data">
                 <h3>Upload Photo</h3>
            <input type="file" name="file"><br>
            <input type="submit" name="data" value="Upload">
            </form>
                <br><br>
                
            </div> 
</div>


<!-- BLOG -->


<div id="login" class="post">
    <br>
<form action="create_port.php" method="post" enctype="multipart/form-data">
    <h3>Post to Status</h3>
  <textarea placeholder="Describe your service" name="content" rows="10" ></textarea><br/>
  <input type="submit" name="post" value="Post" id="submit">
</form>
</div>



<br>
<?php
include_once('footer.php');
?>






