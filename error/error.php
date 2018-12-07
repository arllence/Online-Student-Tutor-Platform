<?php

if(isset($_GET['signup'])){
    
	 $code=$_GET['signup'];
	if($code == "empty"){
		echo "<p class='error'><strong>* Fill in the blanks !</strong></p><br>";
	}else if ($code=="invalid_xters"){
		echo "<p class='error'><strong>* Name characters invalid!</strong></p><br>";
	}else if ($code=="select_acc_type"){
		echo "<p class='error'><strong>* Please select an Account !</strong></p><br>";
    }else if ($code=="email_error"){
		echo "<p class='error'><strong>* Use a valid E-mail!</strong></p><br>";
	}else if ($code=="passwords_dont_match"){
		echo "<p class='error'><strong>* Passwords don't match!</strong></p><br>";
	}else if ($code=="regno_taken"){
		echo "<p class='error'><strong>* Registration No. already in Use!</strong></p><br>";
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
</style>