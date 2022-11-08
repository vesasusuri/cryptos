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
    <form method="post" enctype="multipart/form-data" action="edit_users_id.php" class="flex justify-center">
        <table>
		<div class="flex w-fit">
                <tr>
                    <td class="w-fit bg-blue-500 px-4 py-2 text-white">Edit User's Data</td> 
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