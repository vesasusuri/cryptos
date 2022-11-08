<?php 
  $name = $_SESSION['username'];
  $bwallet = '';
  $btcAddres = '';
  $amount = '';

  $errors = array();

  $conn=mysqli_connect("localhost", "root" , "" , "crypto" );
  mysqli_select_db($conn, 'crypto');

  if(isset($_POST['submit']))
  {
    $bwallet=mysqli_real_escape_string($conn,$_POST['bwallet']);
    $btcAddres=mysqli_real_escape_string($conn,$_POST['btcAddres']);
    $amount=mysqli_real_escape_string($conn,$_POST['amount']);

    if (empty($bwallet)){
        array_push($errors, "Bitcoin Wallet is required"); 
    }
    else if (!preg_match("/^[0-9]*$/",$bwallet)){
        array_push($errors, "Only numbers allowed");
    }
    if (empty($btcAddres)){
        array_push($errors, "BTC Address is required"); 
    }
    else if (!preg_match("/^[a-zA-ZëË0-9]*$/",$btcAddres)){
        array_push($errors, "Only letter and numbers are allowed");
    }

    if (empty($amount)){
        array_push($errors, "Only Numbers are allowed"); 
    }
    else if (!preg_match("/^[0-9]*$/",$amount)){
        array_push($errors, "Only letter and numbers are allowed");
    }


     if (count($errors) == 0) 
     {
        
        $regist ="INSERT INTO withdraw (bwallet,btcAddres,amount,username)
        VALUES ('$bwallet','$btcAddres','$amount','$name')";

        $rows = "SELECT * FROM withdraw WHERE bwallet='$bwallet' AND btcAddres='$btcAddres' AND amount='$amount' ";	
	    $run = mysqli_query($conn, $rows);

        if(mysqli_num_rows($run)<100){
            mysqli_query($conn,$regist);
            echo '<script>alert("Withdrawal is sent successfully")</script>';
            echo "<script>window.open('withdrawal.php', '_self')</script"; 
       }
     }
  }
?>