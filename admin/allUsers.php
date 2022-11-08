<?php
include('adminDashboard.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div id="searchbox">

        <form action="search.php" method="get" enctype="multi/form-data">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative lg:w-1/2 md:w-3/4 mx-auto">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none ">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg%22%3E<path stroke-linecap=" round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" name="value" id="default-search" class="mt-20 block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                <button type="submit" name="search" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>

    </div>

    <div class="relative overflow-x-auto aaa flex justify-center">

        <table class="w-1/2 text-sm text-left mt-14 ">
            <thead class="text-xs text-white uppercase 
            bg-blue-900">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        id
                    </th>

                    <th scope="col" class="py-3 px-6">
                        Emri
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Mbiemri
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Username
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Passwordi
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Btcwallet
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Edit
                    </th>
                </tr>

                <?php
                $con = mysqli_connect("localhost", "root", "", "crypto");
                mysqli_select_db($con, "crypto");

                $select_produktet = "select * from regjistrimi";

                $run_produktet = mysqli_query($con, $select_produktet);

                while ($row = mysqli_fetch_array($run_produktet)) {

                    $id = $row['id'];
                    $emri = $row['emri'];
                    $mbiemri = $row['mbiemri'];
                    $email = $row['email'];
                    $username = $row['username'];
                    $passwordi = $row['passwordi'];
                    $hash = $row['hash'];

                ?>
                    <tr class="bg-white border-b text-black">
                        <th scope="row" class="py-4 px-6 font-medium ">
                            <?php echo $id; ?>
                        </th>
                        <td class="py-4 px-6">
                            <?php echo $emri; ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $mbiemri; ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $email; ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $username; ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $passwordi; ?>
                        </td>
                        <td class="py-4 px-6">
                            <?php echo $hash; ?>
                        </td>
                        <td><a href="edit_users.php?edit=<?php echo $id; ?>" class=" flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a></td>
                    </tr>
                <?php } ?>


        </table>
    </div>
</body>

</html>