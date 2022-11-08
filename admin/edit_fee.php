<?php 

$con=mysqli_connect("localhost","root","","crypto");
mysqli_select_db($con,"crypto");

if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	
	$edit_query = "SELECT * FROM section2 WHERE id='$edit_id'";
	
	$run_edit = mysqli_query($con, $edit_query);
	
?>
<html>

<head>
    <title>Faqja per Admin</title>
    <link rel="stylesheet" href="../styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php include("adminDashboard.php")?>
<body class="bg-white">
    <?php
	while ($erow=mysqli_fetch_array($run_edit)){
?>
<div class="flex justify-center items-center">
	<div class="lg:w-2/5 md:w-1/2 w-2/3 mt-24">
    <form method="post" enctype="multipart/form-data" action="edit_fee_id.php" class="flex justify-center">
        <table>
		<div class="flex w-fit">
                <tr>
                    <td class="w-fit bg-blue-500 px-4 py-2 text-white">Edit User's Deposit Data</td> 
	</tr>
	    </div>
            <input type="hidden" name="id" size="30" value="<?php echo $erow['id']; ?>">

            <div class="flex w-fit">
                <tr>
                    <td class="w-fit border-b-2 border-black">Username:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="text" name="username" size="30"
                            value="<?php echo $erow['username']; ?>">
                    </td>
                </tr>
            </div>

            <div>
                <tr>
                    <td class="w-fit border-b-2 border-black">total fee:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="text" name="totalFee" size="30"
                            value="<?php echo $erow['totalFee']; ?>">
                    </td>
                </tr>
            </div>

            <div>
                <tr>
                    <td class="w-fit border-b-2 border-black">Latest Deposit Date:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="date" name="latesDeposit" size="30"
                            value="<?php echo $erow['latesDeposit'];?>">
                    </td>
                </tr>
            </div>

            <div>
                <tr>
                    <td class="w-fit border-b-2 border-black">End Date:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="date" name="endDate" size="30" value="<?php echo $erow['endDate'];?>">
                    </td>
                </tr>
            </div>
            <div>
                <tr>
                    <td class="w-fit border-b-2 border-black">Date:</td>
                    <td class="border-b-2 border-black">
                        <input class="w-full h-8" type="date" name="date" size="30" value="<?php echo $erow['date'];?>">
                    </td>
                </tr>
            </div>

            <tr class="w-fit h-12">
                <td class=""><input type="submit" name="update" value="Update"
                        class="text-white bg-blue-500 px-6 py-2 mt-8"></td>
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