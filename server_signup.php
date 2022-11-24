<?php 
  session_start();
  
  $emri = '';
  $mbiermi = '';
  $email = '';
  $username = '';
  $passwordi ='';

  $errors = array();

  $conn=mysqli_connect("localhost", "root" , "" , "crypto" );
  mysqli_select_db($conn, 'crypto');

  if(isset($_POST['signup']))
  {
    $emri=mysqli_real_escape_string($conn,$_POST['emri']);
    $mbiemri=mysqli_real_escape_string($conn,$_POST['mbiemri']);
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $passwordi = mysqli_real_escape_string($conn,$_POST['password']);

    if (empty($emri)){
        array_push($errors, "Fistname is required"); 
    }
    else if (!preg_match("/^[a-zA-ZëË ]*$/",$emri)){
        array_push($errors, "Only letters and white space allowed");
    }
    if (empty($mbiemri)){
        array_push($errors, "Surname is required"); 
    }
    else if (!preg_match("/^[a-zA-ZëË ]*$/",$mbiemri)){
        array_push($errors, "Only letters and white space allowed");
    }

    if (empty($email)){
        array_push($errors, "Email is required"); 
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
     	array_push($errors, "Invalid email format");
    }

    if (empty($passwordi)) 
    {   
        array_push($errors, "Password is required"); 
    }

     $query = "SELECT * FROM regjistrimi WHERE emri='$emri' AND email='$email' AND  username='$username' LIMIT 1";
   
     $result = mysqli_query($conn, $query);
     $user = mysqli_fetch_assoc($result);

     if ($user){ 
        if ($user['emri'] === $emri){
            array_push($errors, "Firstname already exists");
        }
        if ($user['email'] === $email){
            array_push($errors, "Email already exists");
        }
        if ($user['username'] === $username){
            array_push($errors, "Username already exists");
        }
     }

     if (count($errors) == 0) 
     {
        
        $regist ="INSERT INTO regjistrimi (emri,mbiemri,username,email,passwordi)
        VALUES ('$emri','$mbiemri','$username','$email','$passwordi')";

        $rows = "SELECT * FROM regjistrimi WHERE emri='$emri' AND email='$email'";	
	    $run = mysqli_query($conn, $rows);

        if(mysqli_num_rows($run)<100){
            mysqli_query($conn,$regist);
            echo '<script>alert("User is registered successfully")</script>';
            echo "<script>window.open('login.php','_SELF')</script>";       
     }
  }
}
?>