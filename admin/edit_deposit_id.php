<?php

$con=mysqli_connect("localhost","root","","crypto");
mysqli_select_db($con,"crypto");
error_reporting();
if(isset($_POST['update'])){

    $id = $_POST['id'];
    $amount1 = $_POST['amount'];
    $btcWallet1 = $_POST['btcWallet'];
    $username1 = $_POST['username'];
    $date1 = $_POST['date'];
    $status1 = $_POST['status'];


	if($id!='' or $amount1!='' or $btcWallet1!='' or $username1!=''){

		$update_query="UPDATE deposit SET amount='$amount1', btcWallet='$btcWallet1', 
        username='$username1', date='$date1', status='$status1' 
        WHERE 
        id='$id'";
		
		if(mysqli_query($con, $update_query)){
		
			echo "<script>alert('Produkti u ndryshua')</script>";
			header("location: deposit.php");
		}
	}
	   
   else {	
			
		echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
		exit();
	   }
	}

?>