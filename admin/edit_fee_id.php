<?php

$con=mysqli_connect("localhost","root","","crypto");
mysqli_select_db($con,"crypto");
error_reporting();
if(isset($_POST['update'])){

    $id = $_POST['id'];
    $username1 = $_POST['username'];
    $totalFee1 = $_POST['totalFee'];
    $latesDeposit1 = $_POST['latesDeposit'];
    $endDate1 = $_POST['endDate'];
    $date1 = $_POST['date'];


	if($id!='' or $username1!='' or $totalfee1!='' or $latestDeposit1!=''){

		$update_query="UPDATE section2 SET username='$username1', totalFee='$totalFee1', 
        latesDeposit='$latesDeposit', endDate='$endDate1', date='$date1' 
        WHERE 
        id='$id'";
		
		if(mysqli_query($con, $update_query)){
		
			echo "<script>alert('Changes are completed')</script>";
            echo "<script>window.open('totalFee.php', '_self')</script>";
		}
	}
	   
   else {	
		echo "<script>alert('One of the inputs it's empty')</script>";
		exit();
	   }
	}

?>