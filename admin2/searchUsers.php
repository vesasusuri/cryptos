<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
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

<?php
include('edit_users_id.php');
?>
<body>

<div class="container-fluid position-relative d-flex p-0">
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
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <div class="content">
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>

                <form class="d-none d-md-flex ms-6"action="search.php" method="get" enctype="multi/form-data">
                    <!-- <input class="form-control bg-dark border-0" type="search" placeholder="Search"> -->
                    <input type="search" name="value" id="default-search" style="width:400%;border-radius:13px" placeholder="Search..." required>
                    <button type="submit" name="search" style="width:200px;height:40px; position:relative;left:30px;background-color:orangered;color:white; border-radius:13px">Search</button>
                </form>
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
<br><br>
<div class="col-sm-12 col-xl-6" style="margin-left:25px; width:96%;">
                 <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">All Users</h6>
                    <table class="table table-hover">
                <thead class="text-xs text-white uppercase bg-blue-900">
                    <tr>
                        <th scope="col">
                            #
                        </th>
                        <th scope="col">
                            Date
                        </th>
                        <th scope="col">
                            Amount
                        </th>
                        <th scope="col">
                            Hash
                        </th>
                        <th scope="col">
                            Value
                        </th>
                        <th scope="col">
                            Status
                        </th>
                        <th scope="col">
                            Passwordi
                        </th>
                        <th scope="col">
                            Edit
                        </th>
                    </tr>
<?php 
$con=mysqli_connect("localhost","root","","crypto");
mysqli_select_db($con,"crypto");

if(isset($_GET['search'])){
	
	$search_id = $_GET['value'];

	$search_query = "select * from regjistrimi where username like '%$search_id%'";
	
	$run_query = mysqli_query($con, $search_query);
	
	while ($search_row=mysqli_fetch_array($run_query)){
	
	$id = $search_row['id'];
	$emri = $search_row['emri'];	
	$mbiemri = $search_row['mbiemri'];	
	$email = $search_row['email'];	
	$username = $search_row['username'];	
	$passwordi = $search_row['passwordi'];	

	?>
	<center>
	

	<tr >
    <th scope="row">
        <?php echo $id; ?>
    </th>

    <td scope="row">
        <?php echo $emri; ?>
    </td>
    
    <td scope="row">
        <?php echo $mbiemri; ?>
    </td>
    
    <td scope="row">
        <?php echo $mbiemri; ?>
    </td>
    
    <td scope="row">
        <?php echo $email; ?>
    </td>
                           
    <td scope="row">
        <?php echo $username; ?>
    </td>
    
    <td scope="row">
        <?php echo $passwordi; ?>
    </td>
    <td>
      <a href="edit_users.php?edit=<?php echo $id; ?>" class=" flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
    </td>
 </tr>

	</center>
<?php } }?>

</div>






</body>
</html>
