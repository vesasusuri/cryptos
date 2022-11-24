<?php 

$con=mysqli_connect("localhost","root","","crypto");
mysqli_select_db($con,"crypto");

if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	
	$edit_query = "SELECT * FROM regjistrimi WHERE id='$edit_id'";
	
	$run_edit = mysqli_query($con, $edit_query);
	
?>
<html>

<head>
    <title>Edit Users</title>
    <link rel="stylesheet" href="../styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-white">
    <?php
	while ($erow=mysqli_fetch_array($run_edit)){
?>
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Cryptos</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/vesa.PNG" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Vesa Susuri</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="Register.php" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Register Users</a>
                    <a href="allUsers.php" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>All Users</a>
                    <a href="deposit.php" class="nav-item nav-link "><i class="fa fa-table me-2"></i>Deposit</a>
                    <a href="totalFee.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Total Fee</a>
                    <a href="qrCode.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>QR Generator</a>
                    <a href="withdrawRequest.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Withdraw</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <div class="content">
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <!-- <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a> -->
                <div class="navbar-nav align-items-center ms-auto">
                
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/vesa.PNG" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Vesa Susuri</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="./logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>

<div class="flex justify-center items-center">
	<div class="lg:w-2/5 md:w-1/2 w-2/3 mt-24">
    <form method="post" enctype="multipart/form-data" action="edit_users_id.php" class="flex justify-center">
        <table>
		<div class="flex w-fit">
                <tr>
                    <td class="w-fit px-4 py-2 text-white" style="background-color:orangered;">Edit User's Data</td> 
                </tr>
	    </div>
            <div class="flex w-fit">
                <tr>
                    <td class="w-fit border-b-2 border-black">Id:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="text" name="id" size="30"
                            value="<?php echo $erow['id']; ?>">
                    </td>
                </tr>
            </div>

            <div>
                <tr>
                    <td class="w-fit border-b-2 border-black">Emri:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="text" name="emri" size="30"
                            value="<?php echo $erow['emri']; ?>">
                    </td>
                </tr>
            </div>

            <div>
                <tr>
                    <td class="w-fit border-b-2 border-black">Surname:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="text" name="mbiemri" size="30"
                            value="<?php echo $erow['mbiemri'];?>">
                    </td>
                </tr>
            </div>

            <div>
                <tr>
                    <td class="w-fit border-b-2 border-black">Email:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="email" name="email" size="30" value="<?php echo $erow['email'];?>">
                    </td>
                </tr>
            </div>

            <div>
                <tr>
                    <td class="w-fit border-b-2 border-black">Username:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="username" name="username" size="30" value="<?php echo $erow['username'];?>">
                    </td>
                </tr>
            </div>

            <div>
                <tr>
                    <td class="w-fit border-b-2 border-black">Password:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="text" name="passwordi" size="30" value="<?php echo $erow['passwordi'];?>">
                    </td>
                </tr>
            </div>

            <div>
                <tr>
                    <td class="w-fit border-b-2 border-black">Hash Code:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="text" name="hash" size="30" value="<?php echo $erow['hash'];?>">
                    </td>
                </tr>
            </div>

            <tr class="w-fit h-12">
                <td class=""><input type="submit" name="update" value="Update"
                        class="text-white bg-blue-500 px-6 py-2 mt-8"  style="background-color:orangered; border-radius:13px;"></td>
            </tr>
            <?php
	}
}
?>
        </table>
    </form>
</div>
</div>
</body>

</html>