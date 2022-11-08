<?php
session_start();

?>
<?php
$connect = mysqli_connect('localhost', 'root', '', 'crypto');
mysqli_select_db($connect, 'crypto');

if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($connect, $_POST['email']);
  $passwordi = mysqli_real_escape_string($connect, $_POST['passwordi']);


  if (empty($username) && empty($passwordi)) {
    echo "<script>alert('Email or Password are empty!')</script>";
  } else if ($username != '' || $passwordi != '') {
    $login = "SELECT * FROM regjistrimi WHERE email='$username' AND passwordi='$passwordi'";
    $con = mysqli_query($connect, $login);

    if (mysqli_num_rows($con) > 0) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      echo "window.open('./section2.php','_self')";
      header('location: ./section2.php');
    } else {
      echo "<script>
            alert('Email or Password are incorrect!')
            </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Trust Crypto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/login.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <style>
    body {
        background: #222D32;
        font-family: 'Roboto', sans-serif;
    }
    </style>
</head>

<body>

    <div class="logo">
        <img src="./img/logo.png" alt="" class="img-logo">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                </div>
                <div class="col-lg-12 login-title">
                    Log In
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="POST" action="login.php">
                            <div class="form-group">
                                <!-- <label class="form-control-label">USERNAME</label> -->
                                <input type="email" placeholder="Email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <!-- <label class="form-control-label">PASSWORD</label> -->
                                <input type="password" id="" placeholder="Password" name="passwordi" class="form-control" >
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="login" value="Log in" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>

            </div>




            <!-- <div class="loginContent">

        <p>Login to continue on you're wallet</p>
        <div class="loginForm">
          <form method="POST" action="login.php">
             Email input 
            <div class="form-outline mb-4 formRow">
              <svg xmlns="http://www.w3.org/2000/svg" width="22.46" height="16.257" viewBox="0 0 22.46 16.257">
                <g id="mail-icon" transform="translate(0.5 0.5)">
                  <path id="Path_1317" data-name="Path 1317" d="M23.183,19.539a.343.343,0,0,1-.237-.094L18.964,15.71a.346.346,0,1,1,.474-.5l3.982,3.735a.346.346,0,0,1-.237.6Z" transform="translate(-5.807 -7.756)" fill="#675757" stroke="#bcc0c2" stroke-width="1" />
                  <path id="Path_1318" data-name="Path 1318" d="M5.748,19.54a.346.346,0,0,1-.237-.6l3.983-3.735a.346.346,0,1,1,.474.5L5.985,19.445A.343.343,0,0,1,5.748,19.54Z" transform="translate(-1.664 -7.756)" fill="#675757" stroke="#bcc0c2" stroke-width="1" />
                  <path id="Path_1319" data-name="Path 1319" d="M19.73,19.739h-18A1.732,1.732,0,0,1,0,18.009V6.212a1.732,1.732,0,0,1,1.73-1.73h18a1.732,1.732,0,0,1,1.73,1.73v11.8A1.732,1.732,0,0,1,19.73,19.739ZM1.73,5.174A1.039,1.039,0,0,0,.692,6.212v11.8A1.039,1.039,0,0,0,1.73,19.047h18a1.039,1.039,0,0,0,1.038-1.038V6.212A1.039,1.039,0,0,0,19.73,5.174Z" transform="translate(0 -4.482)" fill="#675757" stroke="#bcc0c2" stroke-width="1" />
                  <path id="Path_1320" data-name="Path 1320" d="M10.933,14.094a1.935,1.935,0,0,1-1.271-.458L.777,5.885a.346.346,0,1,1,.455-.522l8.885,7.75a1.3,1.3,0,0,0,1.631,0l8.874-7.738a.346.346,0,0,1,.455.522L12.2,13.636A1.933,1.933,0,0,1,10.933,14.094Z" transform="translate(-0.203 -4.727)" fill="#675757" stroke="#bcc0c2" stroke-width="1" />
                </g>
              </svg>
              <input type="text" id="form1Example13" class="form-control form-control-lg" placeholder="email" name="email" />
            </div>

            Password input
            <div class="form-outline formRow">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.571" height="23.063" viewBox="0 0 17.571 23.063">
                    <path id="Icon_material-lock-outline" data-name="Icon material-lock-outline"
                        d="M14.786,19.071a2.2,2.2,0,1,0-2.2-2.2A2.2,2.2,0,0,0,14.786,19.071Zm6.589-9.884h-1.1v-2.2a5.491,5.491,0,1,0-10.982,0v2.2H8.2a2.2,2.2,0,0,0-2.2,2.2V22.366a2.2,2.2,0,0,0,2.2,2.2H21.375a2.2,2.2,0,0,0,2.2-2.2V11.384A2.2,2.2,0,0,0,21.375,9.188Zm-9.994-2.2a3.4,3.4,0,1,1,6.809,0v2.2H11.381Zm9.994,15.375H8.2V11.384H21.375Z"
                        transform="translate(-6 -1.5)" fill="#bcc0c2" />
                </svg>
                <input type="password" id="" class="" placeholder="Password" name="passwordi" />
            </div>

        
            <button type="submit" class="submitLoginBtn" name="login" value="Log in">Sign in</button>
            </form>
        </div>
    </div>
    </div> -->

</body>

</html>