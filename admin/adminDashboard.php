    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Admin Dashboard</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />

    </head>

    <body class="font-sans truncate">




        <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="openSidebar()">
            <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
        </span>
        <div style="z-index: 2;" class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
            <div class="text-gray-100 text-xl">
                <div class="p-2.5 mt-1 flex items-center">

                <img src="../img/logo.png" />


                    <i class="bi bi-x cursor-pointer ml-28 lg:show" onclick="openSidebar()"></i>

                </div>
                <div class="my-2 bg-gray-600 h-[1px]">
                </div>
            </div>
            <a href="./adminDashboard.php">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="fa-solid fa-house-user"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Dashboard</span>

                </div>
            </a>

            <a href="./Register.php">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="fa-solid fa-user"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Register users</span>
                </div>
            </a>
            <a href="./allUsers.php">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="fa-solid fa-users"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">All Users</span>
                </div>
            </a>
            <a href="./deposit.php">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="fa-solid fa-money-bill-transfer"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Deposit</span>

                </div>
            </a>
            <a href="./qrCodeGenerator.php">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="fa-solid fa-qrcode"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">QR code generator</span>

                </div>
            </a>
            <a href="./totalFee.php">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="fa-solid fa-money-check-dollar"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Total fee</span>

                </div>
            </a>


            <div class="my-4 bg-gray-600 h-[1px]"></div>
            <a href="./logout.php">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>

                </div>
            </a>
        </div>

        <script type="text/javascript">
            function dropdown() {
                document.querySelector("#submenu").classList.toggle("hidden");
                document.querySelector("#arrow").classList.toggle("rotate-0");
            }
            dropdown();

            function openSidebar() {
                document.querySelector(".sidebar").classList.toggle("hidden");
            }
        </script>
    </body>

    </html>