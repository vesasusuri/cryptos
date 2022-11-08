<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php
include('adminDashboard.php');
?>

<html>

<head>
    <title>Deposit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    
    <div class=" relative flex justify-center z-0   overflow-x-auto">

        <table class="w-1/2 text-sm text-left mt-14 ">
            <thead class="text-xs text-white uppercase bg-blue-900">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        #
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Date
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Edit
                    </th>
                </tr>


                <?php
                $con = mysqli_connect("localhost", "root", "", "crypto");
                mysqli_select_db($con, "crypto");

                $query = "SELECT * FROM timer";

                $run = mysqli_query($con, $query);

                while ($row = mysqli_fetch_array($run)) {

                    $id = $row['id'];
                    $date = $row['date'];
                    $time = $row['h'];
                ?>
                    <tr class="bg-white border-b text-black">
                        <th scope="row" class="py-4 px-6 font-medium ">
                            <?php echo $date; ?>
                        </th>

                        <td class="py-4 px-6">
                            <?php echo $time; ?>
                        </td>

                        <td>
                            <a href="edit_deposit.php?edit=<?php echo $id; ?>" class=" flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                        </td>
                    </tr>
                <?php } ?>


        </table>
</body>

</html>