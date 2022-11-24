<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: ../index.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
    .img-logo {
        margin-top: -10px;
        margin-left: 43%;
        width: 200px;
    }
    </style>
</head>

<body>
    <!-- <div class="backgroundImage">
        <img src="img/backgroundpng.png" alt="">
    </div>
    <div class="main"> -->
        <div class="mainMenu">

            <svg xmlns="http://www.w3.org/2000/svg" width="43.659" height="56.424" style="margin-left:700px"
                viewBox="0 0 43.659 56.424">
                <path id="Path_3239" data-name="Path 3239"
                    d="M51.485,46.99c-.019-.129-.037-.255-.06-.389A15.048,15.048,0,0,0,58.46,35.8c.006-.045.011-.089.017-.134q.049-.392.078-.791c0-.056.009-.111.013-.167.018-.3.03-.608.03-.915v-.02c0-3.379,0-8.008-1.7-12.058-1.573-3.743-5.155-8.2-13.28-8.214h-.027c-8.146,0-11.733,4.467-13.308,8.215-1.7,4.05-1.7,8.678-1.7,12.058v.02c0,.308.012.612.03.915,0,.056.009.111.013.167q.029.4.078.791c.006.045.011.089.017.134a15.048,15.048,0,0,0,7.035,10.8c-.023.135-.04.261-.06.389a25.7,25.7,0,0,0-11.913,7.032A7.515,7.515,0,0,0,25.3,65.53c4.722,2.916,10.873,4.4,18.283,4.4s13.562-1.479,18.283-4.4A7.515,7.515,0,0,0,63.4,54.022,25.7,25.7,0,0,0,51.485,46.99Zm8.434,15.38c-3.847,2.377-9.115,3.841-16.331,3.841S31.1,64.747,27.256,62.37a3.8,3.8,0,0,1-.766-5.811,21.717,21.717,0,0,1,9.175-5.686,4.645,4.645,0,0,0,.635,1.616c1.64,2.669,5.643,2.957,7.288,2.957s5.648-.288,7.288-2.957a4.645,4.645,0,0,0,.635-1.616,21.717,21.717,0,0,1,9.175,5.686,3.8,3.8,0,0,1-.766,5.811ZM32.292,33.794c0-6.246,0-16.579,11.3-16.579s11.3,10.333,11.3,16.579a11.3,11.3,0,1,1-22.592,0ZM47.711,50.545a2.281,2.281,0,0,1-1.269.777,10.146,10.146,0,0,1-5.71,0,2.281,2.281,0,0,1-1.269-.777,4.265,4.265,0,0,1-.174-2.359,14.957,14.957,0,0,0,8.6,0,4.265,4.265,0,0,1-.174,2.359Z"
                    transform="translate(-21.758 -13.501)" fill="#e4e4e4" />
            </svg>
            <div class="labelItemMenu">
                <span style="color:white;"><?php echo $_SESSION['username']; ?></span>
                <span></span>
            </div>
            </a>
            <a href="./deposit.php" class="menuItem" page="deposit">
                <svg xmlns="http://www.w3.org/2000/svg" width="37.335" height="32.668" viewBox="0 0 37.335 32.668">
                    <g id="download" transform="translate(0 0)">
                        <path id="Path_3219" data-name="Path 3219"
                            d="M21.556,30.668a.781.781,0,0,1-.551-.227l-7.778-7.778a.779.779,0,0,1,.551-1.329h3.889V13.556A1.557,1.557,0,0,1,19.223,12H23.89a1.557,1.557,0,0,1,1.556,1.556v7.778h3.889a.779.779,0,0,1,.551,1.329l-7.778,7.778A.781.781,0,0,1,21.556,30.668Zm-5.9-7.778,5.9,5.9,5.9-5.9H24.668a.778.778,0,0,1-.778-.778V13.556H19.223v8.556a.778.778,0,0,1-.778.778Z"
                            transform="translate(7.223 2.001)" fill="#fff" />
                        <path id="Path_3220" data-name="Path 3220"
                            d="M17.89,31h-14A3.894,3.894,0,0,1,0,27.112V6.889A3.894,3.894,0,0,1,3.889,3H33.446a3.894,3.894,0,0,1,3.889,3.889V22.445a.778.778,0,1,1-1.556,0V6.889a2.336,2.336,0,0,0-2.333-2.333H3.889A2.336,2.336,0,0,0,1.556,6.889V27.112a2.336,2.336,0,0,0,2.333,2.333h14a.778.778,0,0,1,0,1.556Z"
                            transform="translate(0 -3)" fill="#fff" />
                        <path id="Path_3221" data-name="Path 3221"
                            d="M11.667,20.445H.778A.778.778,0,0,1,0,19.667V8.778A.778.778,0,0,1,.778,8H11.667a3.894,3.894,0,0,1,3.889,3.889v4.667A3.894,3.894,0,0,1,11.667,20.445ZM1.556,18.889H11.667A2.336,2.336,0,0,0,14,16.556V11.889a2.336,2.336,0,0,0-2.333-2.333H1.556Z"
                            transform="translate(0 -0.222)" fill="#fff" />
                        <path id="Path_3222" data-name="Path 3222"
                            d="M6.111,16.223a3.111,3.111,0,1,1,3.111-3.111A3.114,3.114,0,0,1,6.111,16.223Zm0-4.667a1.556,1.556,0,1,0,1.556,1.556A1.557,1.557,0,0,0,6.111,11.556Z"
                            transform="translate(1.667 0.889)" fill="#fff" />
                    </g>
                </svg>
                <div class="labelItemMenu">
                    <span>Deposit</span>
                </div>
            </a>

            <a href="./withdrawal.php" class="menuItem" page="withdraw">
                <svg xmlns="http://www.w3.org/2000/svg" width="37.335" height="32.668" viewBox="0 0 37.335 32.668">
                    <g id="download" transform="translate(0 0)">
                        <path id="Path_3219" data-name="Path 3219"
                            d="M8.557,18.668a.781.781,0,0,1-.551-.227L.228,10.662A.779.779,0,0,1,.779,9.334H4.668V1.556A1.557,1.557,0,0,1,6.223,0H10.89a1.557,1.557,0,0,1,1.556,1.556V9.334h3.889a.779.779,0,0,1,.551,1.329L9.107,18.441A.781.781,0,0,1,8.557,18.668Zm-5.9-7.778,5.9,5.9,5.9-5.9H11.668a.778.778,0,0,1-.778-.778V1.556H6.223v8.556a.778.778,0,0,1-.778.778Z"
                            transform="translate(35.78 32.668) rotate(180)" fill="#fff" />
                        <path id="Path_3220" data-name="Path 3220"
                            d="M17.89,31h-14A3.894,3.894,0,0,1,0,27.112V6.889A3.894,3.894,0,0,1,3.889,3H33.446a3.894,3.894,0,0,1,3.889,3.889V22.445a.778.778,0,1,1-1.556,0V6.889a2.336,2.336,0,0,0-2.333-2.333H3.889A2.336,2.336,0,0,0,1.556,6.889V27.112a2.336,2.336,0,0,0,2.333,2.333h14a.778.778,0,0,1,0,1.556Z"
                            transform="translate(0 -3)" fill="#fff" />
                        <path id="Path_3221" data-name="Path 3221"
                            d="M11.667,20.445H.778A.778.778,0,0,1,0,19.667V8.778A.778.778,0,0,1,.778,8H11.667a3.894,3.894,0,0,1,3.889,3.889v4.667A3.894,3.894,0,0,1,11.667,20.445ZM1.556,18.889H11.667A2.336,2.336,0,0,0,14,16.556V11.889a2.336,2.336,0,0,0-2.333-2.333H1.556Z"
                            transform="translate(0 -0.222)" fill="#fff" />
                        <path id="Path_3222" data-name="Path 3222"
                            d="M6.111,16.223a3.111,3.111,0,1,1,3.111-3.111A3.114,3.114,0,0,1,6.111,16.223Zm0-4.667a1.556,1.556,0,1,0,1.556,1.556A1.557,1.557,0,0,0,6.111,11.556Z"
                            transform="translate(1.667 0.889)" fill="#fff" />
                    </g>
                </svg>
                <div class="labelItemMenu">
                    <span>Withdrawal</span>
                </div>
            </a>
            <a href="./transactions.php" class="menuItem" page="transaction">
                <svg xmlns="http://www.w3.org/2000/svg" width="37.41" height="33.272" viewBox="0 0 37.41 33.272">
                    <g id="noun_transfer_567869" transform="translate(0.5 0.5)">
                        <g id="Group_32" data-name="Group 32" transform="translate(0 0)">
                            <path id="Path_3232" data-name="Path 3232"
                                d="M14.275,11a.865.865,0,0,0-.569.22L6.259,18.253A.874.874,0,0,0,6,18.861a.807.807,0,0,0,.259.595l7.447,7.034a.852.852,0,0,0,1.164-.026.868.868,0,0,0-.026-1.177l-5.935-5.6H41.582a.827.827,0,1,0,0-1.655H8.909l5.935-5.611a.856.856,0,0,0,.194-.957A.828.828,0,0,0,14.275,11ZM34.109,27.563a.834.834,0,0,0-.582.246.869.869,0,0,0,.039,1.177l5.935,5.6H6.827a.827.827,0,0,0,0,1.655H39.5L33.566,41.85a.856.856,0,0,0-.194.957.828.828,0,0,0,.763.465.865.865,0,0,0,.569-.22l7.447-7.034a.874.874,0,0,0,.259-.608.807.807,0,0,0-.259-.595L34.7,27.783A.84.84,0,0,0,34.109,27.563Z"
                                transform="translate(-6 -11)" fill="#e4e4e4" stroke="#e4e4e4" stroke-width="1" />
                        </g>
                    </g>
                </svg>
                <div class="labelItemMenu">
                    <span>Withdraw Requests</span>
                </div>
            </a>

            <a href="./logoutUser.php" class="menuItem" page="login">
                <svg xmlns="http://www.w3.org/2000/svg" width="40.26" height="33.546" viewBox="0 0 40.26 33.546">
                    <g id="noun_sign_out_3680483" data-name="noun_sign out_3680483" transform="translate(0)">
                        <g id="Group_33" data-name="Group 33" transform="translate(0 0)">
                            <path id="Path_3236" data-name="Path 3236"
                                d="M38.383,16.2,31.673,9.488a1.672,1.672,0,1,0-2.365,2.365l3.841,3.858H8.677a1.677,1.677,0,0,0,0,3.355H33.149l-3.841,3.841a1.67,1.67,0,0,0,0,2.365,1.6,1.6,0,0,0,1.174.5,1.718,1.718,0,0,0,1.191-.486l6.709-6.709A1.691,1.691,0,0,0,38.383,16.2Z"
                                transform="translate(1.387 -0.615)" fill="#e4e4e4" />
                            <path id="Path_3237" data-name="Path 3237"
                                d="M27.16,27.483a1.682,1.682,0,0,0-1.677,1.677v5.032H5.355V7.355H25.483v5.032a1.677,1.677,0,1,0,3.355,0V5.677A1.682,1.682,0,0,0,27.16,4H3.677A1.682,1.682,0,0,0,2,5.677V35.869a1.682,1.682,0,0,0,1.677,1.677H27.16a1.682,1.682,0,0,0,1.677-1.677V29.16A1.682,1.682,0,0,0,27.16,27.483Z"
                                transform="translate(-2 -4)" fill="#e4e4e4" />
                        </g>
                    </g>
                </svg>
                <div class="labelItemMenu">
                    <span>Sign out</span>
                </div>
            </a>
        </div>

        <div class="page homePage active">
            <div class="headerWrapper">
                <a class="burgerBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38.937" height="29.162" viewBox="0 0 38.937 29.162">
                        <g id="list" transform="translate(0 -64.267)">
                            <path id="Path_3194" data-name="Path 3194"
                                d="M3.583,71.436H35.354a3.584,3.584,0,0,0,0-7.169H3.583a3.584,3.584,0,0,0,0,7.169Zm0-4.887H35.354a1.3,1.3,0,0,1,0,2.606H3.583a1.3,1.3,0,0,1,0-2.606Z"
                                fill="#e4e4e4" />
                            <path id="Path_3195" data-name="Path 3195"
                                d="M35.354,208.867H3.583a3.584,3.584,0,0,0,0,7.169H35.354a3.584,3.584,0,0,0,0-7.169Zm0,4.887H3.583a1.3,1.3,0,0,1,0-2.606H35.354a1.3,1.3,0,0,1,0,2.606Z"
                                transform="translate(0 -133.603)" fill="#e4e4e4" />
                            <path id="Path_3196" data-name="Path 3196"
                                d="M35.354,353.467H3.583a3.584,3.584,0,0,0,0,7.169H35.354a3.584,3.584,0,0,0,0-7.169Zm0,4.887H3.583a1.3,1.3,0,0,1,0-2.606H35.354a1.3,1.3,0,0,1,0,2.606Z"
                                transform="translate(0 -267.207)" fill="#e4e4e4" />
                        </g>
                    </svg>
                </a>
                <a class="headerLogo">
                    <img src="./img/loho22.png" alt="" class="img-logo">
                </a>
            </div>
            <div class="notificationBar">
                <p>You have outstanding balance, pay to withdraw your money</p>
            </div>
            <div class="homePageContent">
                <div class="availableBalance">
                    <div class="svgIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                            <g id="accept" transform="translate(-12 -12)">
                                <path id="Path_3204" data-name="Path 3204"
                                    d="M32,12A20,20,0,1,0,52,32,20,20,0,0,0,32,12Zm0,38A18,18,0,1,1,50,32,18,18,0,0,1,32,50Z"
                                    fill="#fff" />
                                <path id="Path_3205" data-name="Path 3205"
                                    d="M40.293,21.293,28,33.586l-4.293-4.293a1,1,0,0,0-1.414,0l-4,4a1,1,0,0,0,0,1.414l9,9a1,1,0,0,0,1.414,0l17-17a1,1,0,0,0,0-1.414l-4-4A1,1,0,0,0,40.293,21.293ZM28,41.586,20.414,34,23,31.414l4.293,4.293a1,1,0,0,0,1.414,0L41,23.414,43.586,26Z"
                                    fill="#fff" />
                            </g>
                        </svg>
                    </div>
                    <div class="descBox">

                        <span>Total Balance</span>
                        <span><?php
                                    $con = mysqli_connect("localhost", "root", "", "crypto");
                                    mysqli_select_db($con, "crypto");

                                    $select_produktet = "SELECT amount FROM deposit WHERE username = '" . $_SESSION['username'] . "'";
                                    $run_produktet = mysqli_query($con, $select_produktet);
                                    $nullvlera = 0;
                                    while ($row = mysqli_fetch_array($run_produktet)) {
                                        $nullvlera += $row['amount'];
                                    ?>
                            <?php } ?>
                            <div class="flex">
                                <p class="text-2xl mr-1 text-white" id="dollar">$</p>
                                <input type="text" disabled name="usd"
                                    class="currencyField text-white bg-black w-full text-2xl" placeholder="USD"
                                    value="<?php echo $nullvlera;?>">
                                <p class="mr-2 mt-1.5">/</p>
                                <input type="number" name="btc" class="currencyField text-white bg-black text-sm"
                                    placeholder="BTC" disabled>
                                <input type="button" class="currencyField" value="Click">
                            </div>


                            <span><b class="grColor">+$30.9</b> - from last day</span>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script>
                    $(".currencyField").click(function() { //input[name='calc']
                        let convFrom;
                        if ($(this).prop("name") == "btc") {
                            convFrom = "btc";
                            convTo = "usd";
                        } else {
                            convFrom = "usd";
                            convTo = "btc";
                        }
                        $.getJSON("https://api.coindesk.com/v1/bpi/currentprice/usd.json",
                            function(data) {
                                var origAmount = parseFloat($("input[name='" + convFrom + "']").val());
                                var exchangeRate = parseInt(data.bpi.USD.rate_float);
                                let amount;
                                if (convFrom == "btc")
                                    amount = parseFloat(origAmount * exchangeRate);
                                else
                                    amount = parseFloat(origAmount / exchangeRate);
                                $("input[name='" + convTo + "']").val(amount.toFixed(4));
                            });

                    });
                    </script>
                </div>
                <svg class="helperLineSvg mt-6" xmlns="http://www.w3.org/2000/svg" width="477.869" height="2"
                    viewBox="0 0 477.869 2">
                    <line id="Line_60" data-name="Line 60" x2="475.869" transform="translate(1 1)" fill="none"
                        stroke="#bcc0c2" stroke-linecap="round" stroke-width="2" opacity="0.33" />
                </svg>

                <div class="historyBox">
                    <div class="svgIcon">
                        <svg id="clock" xmlns="http://www.w3.org/2000/svg" width="15.994" height="15.994"
                            viewBox="0 0 15.994 15.994">
                            <g id="Group_14" data-name="Group 14" transform="translate(7.378 3.71)">
                                <g id="Group_13" data-name="Group 13">
                                    <path id="Path_3206" data-name="Path 3206"
                                        d="M239.638,124.478l-2.23-1.673V119.4a.619.619,0,1,0-1.239,0v3.717a.618.618,0,0,0,.248.5l2.478,1.858a.619.619,0,0,0,.743-.991Z"
                                        transform="translate(-236.169 -118.779)" fill="#e4e4e4" />
                                </g>
                            </g>
                            <g id="Group_16" data-name="Group 16">
                                <g id="Group_15" data-name="Group 15">
                                    <path id="Path_3207" data-name="Path 3207"
                                        d="M8,0a8,8,0,1,0,8,8A8.006,8.006,0,0,0,8,0ZM8,14.755A6.758,6.758,0,1,1,14.755,8,6.766,6.766,0,0,1,8,14.755Z"
                                        fill="#e4e4e4" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="descBox">
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "crypto");
                            mysqli_select_db($con, "crypto");

                            $select_produktet = "select date from deposit";

                            $run_produktet = mysqli_query($con, $select_produktet);
                            while ($row = mysqli_fetch_array($run_produktet)) {
                                $date = $row['date'];

                            ?>
                        <?php } ?>
                        <div class="descInformation">
                            <span>Deposit - 01.12.2022 - BTC </span>
                            <span class="grColor">Recover $369966</span>
                                
                            <span class="puColor">
                                Total Fee 
                                343
                                <!-- <?php
                                    // $con = mysqli_connect("localhost", "root", "", "crypto");
                                    // mysqli_select_db($con, "crypto");

                                    // $select_produktet = "SELECT totalfee FROM section2 WHERE username = '" . $_SESSION['username'] . "'";
                                    // $run_produktet = mysqli_query($con, $select_produktet);

                                    // while ($row = mysqli_fetch_array($run_produktet)) {
                                    //     $totalfee = $row['totalfee'];
                                    // ?>
                                <?php //}?> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="1" viewBox="0 0 10 1">
                                    <line id="Line_4" data-name="Line 4" x2="9" transform="translate(0.5 0.5)"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1"
                                        opacity="0.18" />
                                </svg>
                                <?php//echo $totalfee?>
                                <!--  / 0.816 BTC -->€16,408.99 / 0.816 BTC
                            </span>
                            <span>End Date - December 27</span>
                        </div>


                        <!-- <div class="descChart ">
                            <center><input type="hidden" name="dateTimer"><?php include('./timer.php'); ?></input>
                            </center>
                        </div> -->
                    </div>
                </div>
                <center> <div class="transactionNav">
                        <a class="transactionBtn active">All Deposits</a>
                    </div></center>
                <div class="transactionTable">
                    <div class="transactionTable">
                        <div class="transactionHeaderTable">
                            <div class="rowTransaction">
                                <span>#</span>
                                <span>amount</span>
                                <span>btcWallet</span>
                                <span>username</span>
                                <span>date</span>
                                <span>status</span>
                            </div>
                        </div>
                        <div class="rowTransaction2">

                            <div class="rowTransaction2">
                                <?php
                                    $username = $_SESSION['username'];

                                    $con = mysqli_connect("localhost", "root", "", "crypto");
                                    mysqli_select_db($con, "crypto");

                                    $select_produktet = "SELECT * FROM deposit WHERE  username = '" . $_SESSION['username'] . "'";

                                    $run_produktet = mysqli_query($con, $select_produktet);

                    while ($row = mysqli_fetch_array($run_produktet)) {
   
                        $id = $row['id'];
                        $amount = $row['amount'];
                        $btcWallet = $row['btcWallet'];
                        $username = $row['username'];
                        $date = $row['date'];
                        $status = $row['status'];

                    ?>

                                <span class="span2"><?php echo $id; ?></span>
                                <span class="span2"><?php echo $amount; ?></span>
                                <span class="span2"><?php echo $btcWallet; ?></span>
                                <span class="span2"><?php echo $username; ?></span>
                                <span class="span2"><?php echo $date; ?></span>
                                <span class="span2">
                                    <?php echo $status; ?>
                                </span>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script rel="javascript" type="text/javascript" src="js/main.js"></script>

</body>

</html>
<?php
}
?>