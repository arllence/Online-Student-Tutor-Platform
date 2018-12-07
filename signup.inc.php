<?php
    include 'database.php';

    if(isset($_POST['submit'])){
        $user_acc = $_POST['acc_type'];
        $user_name = $_POST['name'];
        $user_email = $_POST['email'];
        $user_password = $_POST['pass'];

        $user_name = strtoupper($user_name);
        $user_acc = strtoupper($user_acc);


         //error handlers
        //check if inputs are empty
        if(empty($user_name) || empty($user_email) || empty($user_password) || empty($user_acc)){
            header("Location: signup.php?signup=empty");
            exit();
        }else{
            $sql ="SELECT * FROM users WHERE email='$user_email'"; 
            $result=mysqli_query($database, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                header("Location: signup.php?signup=email_taken");
                exit();
            }else{
                $hashedpwd = password_hash($user_password, PASSWORD_DEFAULT);
                $sql="INSERT INTO users (name,account,email,password) VALUES('$user_name','$user_acc','$user_email','$hashedpwd')";
                mysqli_query($database,$sql) or die(mysqli_error($database));
                header('Location: login.php?login=signup_success');
        }
    }
}
?>
