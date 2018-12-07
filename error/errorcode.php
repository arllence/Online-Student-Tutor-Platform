<?php

if(isset($_GET['entercode'])){
    
	 $code = $_GET['entercode'];
	if($code == "empty"){
		echo "<p class='error'><strong>* Please Enter a Code !</strong></p><br>";
	}elseif($code == "Invalid"){
		echo "<p class='error'><strong>* Code incorrect, try again</strong></p><br>";
	}
}
?>

<style>
.error{
	background-color:#f3f3f3;
	width:30%;
	margin:auto;
	padding:12px 8px;
	border-radius:6px;
	text-align:center;
	border: 1px solid red;
	color : red;
}
</style>