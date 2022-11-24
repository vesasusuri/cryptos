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
      echo "window.open('./bic coins','_self')";
      header('location: ./bic coins.php');
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
    <title>Login</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="admin2/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="admin2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="admin2/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="admin2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="admin2/css/style.css" rel="stylesheet">
</head>

<body>
    <br><br><br><br>
<div class="col-sm-12 col-xl-6" style="margin-left:400px;">
                <div class="bg-secondary rounded h-100 p-4">
                     <h6 class="mb-4">Login</h6>
                        <form method="POST" action="login.php">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="email">
                                <label for="floatingInput">Email address:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="Password" name="passwordi">
                                <label for="floatingPassword">Password:</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4"  name="login" value="Login">Log In</button>
                          </form>
                        </div>
                    </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>