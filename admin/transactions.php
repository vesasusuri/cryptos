<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php
include('adminDashboard.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transactions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="overflow-x-auto x flex justify-center ">
        <table class="w-fit text-sm text-left mt-20">
            <thead class="text-xs text-white uppercase bg-blue-900">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        #
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Date
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Amount
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Hash
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Value
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Status
                    </th>
                </tr>

                <?php
                $con = mysqli_connect("localhost", "root", "", "crypto");
                mysqli_select_db($con, "crypto");

                $select_produktet = "select * from transactions";

                $run_produktet = mysqli_query($con, $select_produktet);

                while ($row = mysqli_fetch_array($run_produktet)) {

                    $id = $row['id'];
                    $data = $row['data'];
                    $shuma = $row['shuma'];
                    $hash = $row['hash'];
                    $value = $row['value'];
                    $status = $row['status'];

                ?>
                    <tr class="bg-white border-b text-black">
                        <th scope="row" class="py-4 px-6 font-medium ">
                            <?php echo $id; ?>
                        </th>
                        <td class="py-4 px-6">
                            <?php echo $data; ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $shuma; ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $hash; ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $value; ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $status; ?>
                        </td>
                    </tr>
                <?php } ?>

            </thead>
        </table>
</body>

</html>