<?php
include('server_regjistrimi.php');
?>
<script src="https://cdn.tailwindcss.com"></script>
<?php
include('adminDashboard.php');
?>

<div class="flex justify-center items-center h-full overflow-y-scroll">
    <div class="lg:w-2/5 md:w-1/2 w-5/6">
        <form class="bg-white p-10 rounded-lg shadow-lg" method="POST" action="Register.php">



            <?php include('errors_regjistrimi.php'); ?>
            <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Admin Register</h1>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Name:</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="emri" placeholder="Name" />
            </div>
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="surname">Surname:</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="mbiemri" placeholder="Surname" />
            </div>

            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="surname">Username:</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username" placeholder="Username" />
            </div>




            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email:</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" placeholder="@email" />
            </div>


            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password:</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" placeholder="Password" />
            </div>

            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Hash Code:</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="hash" placeholder="Hash Code" />
            </div>

            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="password">File Upload:</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="file" name="fileUpload" placeholder="File" />
            </div>

            <button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans" name="login" value="Register">Register</button>
        </form>
    </div>

</div>