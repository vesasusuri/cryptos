<?php

$con=mysqli_connect("localhost","root","","crypto");
mysqli_select_db($con,"crypto");
error_reporting();
if(isset($_POST['update'])){

    $id = $_POST['id'];
    $emri1 = $_POST['emri'];
    $mbiemri1 = $_POST['mbiemri'];
    $email1 = $_POST['email'];
    $username1 = $_POST['username'];
    $passwordi1 = $_POST['passwordi'];
    $hash1 = $_POST['hash'];


	if($id!='' or $emri1!='' or $mbiemri1!='' or $email1!=''){

		$update_query="UPDATE regjistrimi SET emri='$emri1', mbiemri='$mbiemri1', 
        email='$email1', username='$username1', passwordi='$passwordi1',hash='$hash1' 
        WHERE 
        id='$id'";
		
		if(mysqli_query($con, $update_query)){
		
			echo "<script>alert('User's data is now changed')</script>";
			header("location: allUsers.php");
		}
	}
	   
   else {	
			
		echo "<script>alert('One of the rows is empty')</script>";
		exit();
	   }
	}

?>