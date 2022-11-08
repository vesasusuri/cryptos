
<?php 

  $name = $_SESSION['username'];
  $amount1 = '';
  $btcWallet1 = '';

  $errors = array();

  $conn=mysqli_connect("localhost", "root" , "" , "crypto" );
  mysqli_select_db($conn, 'crypto');

  if(isset($_POST['submit2']))
  {
    $amount1=mysqli_real_escape_string($conn,$_POST['amount1']);
    $btcWallet1=mysqli_real_escape_string($conn,$_POST['btcWallet1']);

    if (empty($amount1)){
        array_push($errors, "The Amount is required"); 
    }
    else if (!preg_match("/^[0-9]*$/",$amount1)){
        array_push($errors, "Only numbers allowed");
    }

    if (empty($btcWallet1)){
        array_push($errors, "BTC Address is required"); 
    }
    else if (!preg_match("/^[0-9]*$/",$btcWallet1)){
        array_push($errors, "Only numbers are allowed");
    }
     if (count($errors) == 0) 
     {
        
        $regist ="INSERT INTO deposit (amount,btcWallet,username)
        VALUES ('$amount1','$btcWallet1','$name')";

        $rows = "SELECT * FROM deposit WHERE amount='$amount1' AND btcWallet='$btcWallet1'";	
	    $run = mysqli_query($conn, $rows);

        if(mysqli_num_rows($run)<100){
            mysqli_query($conn,$regist);
            echo '<script>alert("Deposit is sent successfully")</script>';
            echo "window.open('deposit.php')";  
       }
     }
  }
?>