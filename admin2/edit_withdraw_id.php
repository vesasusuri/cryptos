<?php

$con=mysqli_connect("localhost","root","","crypto");
mysqli_select_db($con,"crypto");
error_reporting();
if(isset($_POST['update'])){

    $id = $_POST['id'];
    $bwallet1 = $_POST['bwallet'];
    $btcAddress1 = $_POST['btcAddress'];
    $username1 = $_POST['username'];
    $amount1 = $_POST['amount'];
    $status1 = $_POST['status'];


	if($id!='' or $amount1!='' or $bwallet1!='' or $username1!=''){

		$update_query="UPDATE withdraw SET amount='$amount1', bwallet='$bwallet1', 
        username='$username1', btcAddress='$btcAddress1', status='$status1' 
        WHERE 
        id='$id'";
		
		if(mysqli_query($con, $update_query)){
		
			echo "<script>alert('Users Data Is Changed')</script>";
			header("location: withdrawRequest.php");
		}
	}
	   
   else {	
			
		echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
		exit();
	   }
	}

?>