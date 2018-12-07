<?php
$title = 'Student Tutor';
include_once('head.php');
include_once('database.php');
?>
        <section style="">
          <div class="container" style="clear:left">
            <br> 
       
            <?php
                 if (isset($_GET['pid'])){
                 
                 // get id value
                 
                 $id = $_GET['pid'];

                 $sql = "SELECT * FROM images WHERE user_id = '$id'";
                 $run=mysqli_query($database,$sql);
                 while($row=mysqli_fetch_array($run))
                        {                        
                               // $img=$row['img_dir'];
                                $picx = "<img src = '{$row['img_dir']}' height = '190px'>";
                                echo "
                                        <span id='picx'>
                                            $picx
                                        </span>
                        
                                    ";
                        }
                 }else{
                     header('Location: index.php?error=unknown');
                 }
                    
             ?>



          </div>
        </section>
<br>
<?php
include_once('footer.php');
?>
