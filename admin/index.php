<?php
session_start(); ?>
<?php
$connect = mysqli_connect('localhost', 'root', '', 'crypto');
mysqli_select_db($connect, 'crypto');
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($connect, $_POST['email']);
    $passwordi = mysqli_real_escape_string($connect, $_POST['passwordi']);
    if (empty($username) && empty($passwordi)) {
        echo "<script>alert('Email or Password are empty!')</script>";
    } elseif ($username != '' || $passwordi != '') {
        $login = "SELECT * FROM admini WHERE email='$username' AND password='$passwordi'";
        $con = mysqli_query($connect, $login);
        if (mysqli_num_rows($con) > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = 'You are now logged in';
            echo "window.open('adminDashboard.php','_self')";
            header('location: adminDashboard.php');
        } else {
            echo "<script>
            alert('Email or Password are incorrect!')
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>
<div class="h-screen flex justify-center items-center">
	<div class="lg:w-2/5 md:w-1/2 w-2/3">
		<form class="bg-white p-10 rounded-lg shadow-lg min-w-full" method="POST" action="index.php">
 
			<h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Admin Login</h1>
			<div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="username">Username</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" placeholder="Username:" />
      </div>
	
					<div>
						<label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
						<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password" name="passwordi" placeholder="Password:" />
      </div>

							<button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans" name="login" value="Log In">Login</button>
		</form>
	</div>
</div>


    <!-- <form method="POST" action="loginAdmin.php">
        <h1>Log In</h1>
    
        <div class="">
            <input type="text" id="form1Example13" class="" placeholder="username" name="email" />
        </div>

        <div class="">
            <input type="password" id="form1Example23" class="" placeholder="Password" name="passwordi" />
        </div>

        <button type="submit" class="" name="login" value="Log in">Sign in as Admin</button>
    </form> -->

</body>

</html>