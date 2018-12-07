<?php

if(isset($_GET['login'])){
    
	 $code = $_GET['login'];
	if($code == "empty"){
		echo "<p class='error'><strong>* Fill in the blanks !</strong></p><br>";
	}else if ($code=="signup_success"){
		echo "<p class='error2'><strong>* Sign Up Success! Log in to continue...</strong></p><br>";
	}else if ($code=="select_acc_type"){
		echo "<p class='error'><strong>* Please select an Account !</strong></p><br>";
    }else if ($code=="false"){
		echo "<p class='error'><strong>* Please log in to continue...</strong></p><br>";
	}else if ($code=="error_password"){
		echo "<p class='error'><strong>* Invalid Password!</strong></p><br>";
	}else if ($code=="error_email"){
		echo "<p class='error'><strong>* Emain not in use!</strong></p><br>";
	}
}
?>

<style>
.error{
	background-color:#f3f3f3;
	width:40%;
	margin:auto;
	padding:12px 8px;
	border-radius:6px;
	text-align:center;
	border: 1px solid red;
	color : red;
}
.error2{
	background-color:#f3f3f3;
	width:40%;
	margin:auto;
	padding:12px 8px;
	border-radius:6px;
	text-align:center;
	border: 1px solid darkgreen;
	color : darkgreen;
}
</style>