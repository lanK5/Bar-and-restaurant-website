<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){
	$firstname			=$_POST['firstname'];
	$lastname			=$_POST['lastname'];
	$id			        =$_POST['id'];
	$email				=$_POST['email'];
	$phonenumber		=$_POST['phonenumber'];
	$password			=$_POST['password'];

		sql="INSERT INTO ianos_bar_and_restaurant(firstname, lastname, id, email, phonenumber, password )   VALUES(?,?,?,?,?,?)";
		stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->is_executable($firstname, $lastname, $id, $email, $phonenumber, $password );
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There was an error while saving the data.';
		}
	}else{
		echo 'No data';
	}