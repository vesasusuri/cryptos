<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Total Fee</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
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
                    <a href="allUsers.php" class="nav-item nav-link "><i class="fa fa-keyboard me-2"></i>All Users</a>
                    <a href="deposit.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Deposit</a>
                    <a href="totalFee.php" class="nav-item nav-link active"><i class="fa fa-chart-bar me-2"></i>Total Fee</a>
                    <a href="qrCode.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>QR Generator</a>
                    <a href="withdrawRequest.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Withdraw</a>
                </div>
            </nav>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i>Cryptos</h2>
                </a>
                <form class="d-none d-md-flex ms-6" action="searchUsers.php" method="get" enctype="multi/form-data">
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
                id
            </th>
            <th scope="col">
                Username:
            </th>
            <th scope="col">
                total fee:
            </th>
            <th scope="col">
                Latest Deposit Date:
            </th>
            <th scope="col">
                End Date:
            </th>
            <th scope="col">
                Date:
            </th>
            <th scope="col">
                Edit:
            </th>
        </tr>

        <?php
        $con = mysqli_connect("localhost", "root", "", "crypto");
        mysqli_select_db($con, "crypto");

        $select_produktet = "select * from section2";

        $run_produktet = mysqli_query($con, $select_produktet);

        while ($row = mysqli_fetch_array($run_produktet)) {

            $id = $row['id'];
            $username = $row['username'];
            $totalFee = $row['totalFee'];
            $latesDeposit = $row['latesDeposit'];
            $endDate = $row['endDate'];
            $date = $row['date'];

        ?>
            <tr>
                <th scope="row" >
                    <?php echo $id; ?>
                </th>
                <td scope="row">
                    <?php echo $username; ?>
                </td>
                <td scope="row">
                    <?php echo $totalFee; ?>
                </td>
                <td scope="row">
                    <?php echo $latesDeposit; ?>
                </td>
                <td scope="row">
                    <?php echo $endDate; ?>
                </td>
                <td scope="row">
                    <?php echo $date; ?>
                </td>
                <td><a href="edit_fee.php?edit=<?php echo $id; ?>" class=" flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a></td>
            </tr>
        <?php } ?>


</table>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Cryptos</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="#">Vesa Susuri</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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