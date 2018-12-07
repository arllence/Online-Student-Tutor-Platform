<?php
session_start();



if(isset($_POST['submit'])){
    include 'database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];


        //error handlers
        //check if inputs are empty
        if(empty($email) || empty($password)){
            header("Location: login.php?login=empty");
            exit();
        }else{
            //check if user exists in db
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($database, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck < 1){
                header("Location: login.php?login=error_email");
                exit();
            }else{
                if($row = mysqli_fetch_assoc($result)){
                    $hashedPwdCheck = password_verify($password, $row['password']);
                    if($hashedPwdCheck == false){
                        header("Location: login.php?login=error_password");
                        exit();
                    }elseif($hashedPwdCheck == true){
                        //log in the user
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['account'] = $row['account'];
                        $_SESSION['price'] = $row['lprice'];
                        $_SESSION['admin'] = $row['admin'];
                        
                         if($_SESSION['admin']==1){
                            $_SESSION['admin']=1;
                          }

                        header("Location: index.php?login=SUCCESS");
                        exit();
                    }
                  }
                }
            }
        }
else{
   header("Location: index.php?login=error");
    exit();
}
