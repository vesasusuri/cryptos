<?php
session_start();
// session_start();
// if (isset($_POST['submit2'])) {


//     require 'phpmailer/PHPMailerAutoload.php'; //eshte sikurse include,window.open,a href etj...
//     $mail = new PHPMailer; //klasa
//     $mail->isSMTP(); //metoda
//     $mail->Host = 'smtp.gmail.com'; //hosti default
//     $mail->Port = 587; //porti standart te siguris tls
//     $mail->SMTPAuth = true; //lejim per dergim
//     $mail->SMTPSecure = 'tls'; //lloji i siguris(tls->Transport Layer Security ->Protocol),SSL (Secure Sockets Layer) 
//     //e.g."tls://smtp1.example.com:587;ssl://smtp2.example.com:465").


//     $mail->Username = 'almirpinduk@gmail.com'; // prej nga do te dergoj(hosti_kryesori)mos harro me ndryshu settings te gmail.com (Signing in to Google(OFF OFF , dhe Less secure app access(ON)))
//     $mail->Password = 'sluwybajpzmhzqwl'; //sheno pass qe do te merr prej gmail settings Security Signing in to Google App Passwords
//     $mail->setFrom('almirpinduk@gmail.com', 'AlmirPinduk'); // hosti si dhe nje titull
//     $mail->addAddress('almirpinduk@gmail.com'); //kush do te pranoje emailin
//     $mail->addReplyTo('almirpinduku@gmail.com'); //lejim per replyTo

//     $mail->isHTML(true); // nese ka pjese te HTML
//     $mail->Subject = 'Trust Crypto';
//     $amount =  $_POST['amount1'];
//     $username = $_SESSION['username'];
//     $mail->Body = 'Amount : ' . $amount . '<br>' . $username;
//     if ($amount != '') {


//         if (!$mail->Send()) {

//             echo "Error: " . $mail->ErrorInfo;
//         } else {
//             echo "<script>alert ('Email has been sent.') </script>";
//             echo "<script>window.open('deposit.php','_SELF') </script>";
//         }
//     } else {
//         echo "<script>alert ('Please fill you`re inputs') </script>";
//     }
// }
?> 

<?php

if (!isset($_SESSION['username'])) {
    header('location: ../index.php');
    
} else {
?>

    <?php
    include('server_deposit.php');
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deposit</title>
        <link rel="stylesheet" href="css/style.css" />

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <style>
    .img-logo {
        margin-top: -10px;
        margin-left:0%;
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

                <svg xmlns="http://www.w3.org/2000/svg" width="43.659" height="56.424" viewBox="0 0 43.659 56.424">
                    <path id="Path_3239" data-name="Path 3239" d="M51.485,46.99c-.019-.129-.037-.255-.06-.389A15.048,15.048,0,0,0,58.46,35.8c.006-.045.011-.089.017-.134q.049-.392.078-.791c0-.056.009-.111.013-.167.018-.3.03-.608.03-.915v-.02c0-3.379,0-8.008-1.7-12.058-1.573-3.743-5.155-8.2-13.28-8.214h-.027c-8.146,0-11.733,4.467-13.308,8.215-1.7,4.05-1.7,8.678-1.7,12.058v.02c0,.308.012.612.03.915,0,.056.009.111.013.167q.029.4.078.791c.006.045.011.089.017.134a15.048,15.048,0,0,0,7.035,10.8c-.023.135-.04.261-.06.389a25.7,25.7,0,0,0-11.913,7.032A7.515,7.515,0,0,0,25.3,65.53c4.722,2.916,10.873,4.4,18.283,4.4s13.562-1.479,18.283-4.4A7.515,7.515,0,0,0,63.4,54.022,25.7,25.7,0,0,0,51.485,46.99Zm8.434,15.38c-3.847,2.377-9.115,3.841-16.331,3.841S31.1,64.747,27.256,62.37a3.8,3.8,0,0,1-.766-5.811,21.717,21.717,0,0,1,9.175-5.686,4.645,4.645,0,0,0,.635,1.616c1.64,2.669,5.643,2.957,7.288,2.957s5.648-.288,7.288-2.957a4.645,4.645,0,0,0,.635-1.616,21.717,21.717,0,0,1,9.175,5.686,3.8,3.8,0,0,1-.766,5.811ZM32.292,33.794c0-6.246,0-16.579,11.3-16.579s11.3,10.333,11.3,16.579a11.3,11.3,0,1,1-22.592,0ZM47.711,50.545a2.281,2.281,0,0,1-1.269.777,10.146,10.146,0,0,1-5.71,0,2.281,2.281,0,0,1-1.269-.777,4.265,4.265,0,0,1-.174-2.359,14.957,14.957,0,0,0,8.6,0,4.265,4.265,0,0,1-.174,2.359Z" transform="translate(-21.758 -13.501)" fill="#e4e4e4" />
                </svg>
                <div class="labelItemMenu">
                    <span style="color:white;"><?php echo $_SESSION['username']; ?></span>
                    <span></span>
                </div>
                <a href="./deposit.php" class="menuItem" page="deposit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="37.335" height="32.668" viewBox="0 0 37.335 32.668">
                        <g id="download" transform="translate(0 0)">
                            <path id="Path_3219" data-name="Path 3219" d="M21.556,30.668a.781.781,0,0,1-.551-.227l-7.778-7.778a.779.779,0,0,1,.551-1.329h3.889V13.556A1.557,1.557,0,0,1,19.223,12H23.89a1.557,1.557,0,0,1,1.556,1.556v7.778h3.889a.779.779,0,0,1,.551,1.329l-7.778,7.778A.781.781,0,0,1,21.556,30.668Zm-5.9-7.778,5.9,5.9,5.9-5.9H24.668a.778.778,0,0,1-.778-.778V13.556H19.223v8.556a.778.778,0,0,1-.778.778Z" transform="translate(7.223 2.001)" fill="#fff" />
                            <path id="Path_3220" data-name="Path 3220" d="M17.89,31h-14A3.894,3.894,0,0,1,0,27.112V6.889A3.894,3.894,0,0,1,3.889,3H33.446a3.894,3.894,0,0,1,3.889,3.889V22.445a.778.778,0,1,1-1.556,0V6.889a2.336,2.336,0,0,0-2.333-2.333H3.889A2.336,2.336,0,0,0,1.556,6.889V27.112a2.336,2.336,0,0,0,2.333,2.333h14a.778.778,0,0,1,0,1.556Z" transform="translate(0 -3)" fill="#fff" />
                            <path id="Path_3221" data-name="Path 3221" d="M11.667,20.445H.778A.778.778,0,0,1,0,19.667V8.778A.778.778,0,0,1,.778,8H11.667a3.894,3.894,0,0,1,3.889,3.889v4.667A3.894,3.894,0,0,1,11.667,20.445ZM1.556,18.889H11.667A2.336,2.336,0,0,0,14,16.556V11.889a2.336,2.336,0,0,0-2.333-2.333H1.556Z" transform="translate(0 -0.222)" fill="#fff" />
                            <path id="Path_3222" data-name="Path 3222" d="M6.111,16.223a3.111,3.111,0,1,1,3.111-3.111A3.114,3.114,0,0,1,6.111,16.223Zm0-4.667a1.556,1.556,0,1,0,1.556,1.556A1.557,1.557,0,0,0,6.111,11.556Z" transform="translate(1.667 0.889)" fill="#fff" />
                        </g>
                    </svg>
                    <div class="labelItemMenu">
                        <span>Deposit</span>
                    </div>
                </a>

                <a href="./withdrawal.php" class="menuItem" page="withdraw">
                    <svg xmlns="http://www.w3.org/2000/svg" width="37.335" height="32.668" viewBox="0 0 37.335 32.668">
                        <g id="download" transform="translate(0 0)">
                            <path id="Path_3219" data-name="Path 3219" d="M8.557,18.668a.781.781,0,0,1-.551-.227L.228,10.662A.779.779,0,0,1,.779,9.334H4.668V1.556A1.557,1.557,0,0,1,6.223,0H10.89a1.557,1.557,0,0,1,1.556,1.556V9.334h3.889a.779.779,0,0,1,.551,1.329L9.107,18.441A.781.781,0,0,1,8.557,18.668Zm-5.9-7.778,5.9,5.9,5.9-5.9H11.668a.778.778,0,0,1-.778-.778V1.556H6.223v8.556a.778.778,0,0,1-.778.778Z" transform="translate(35.78 32.668) rotate(180)" fill="#fff" />
                            <path id="Path_3220" data-name="Path 3220" d="M17.89,31h-14A3.894,3.894,0,0,1,0,27.112V6.889A3.894,3.894,0,0,1,3.889,3H33.446a3.894,3.894,0,0,1,3.889,3.889V22.445a.778.778,0,1,1-1.556,0V6.889a2.336,2.336,0,0,0-2.333-2.333H3.889A2.336,2.336,0,0,0,1.556,6.889V27.112a2.336,2.336,0,0,0,2.333,2.333h14a.778.778,0,0,1,0,1.556Z" transform="translate(0 -3)" fill="#fff" />
                            <path id="Path_3221" data-name="Path 3221" d="M11.667,20.445H.778A.778.778,0,0,1,0,19.667V8.778A.778.778,0,0,1,.778,8H11.667a3.894,3.894,0,0,1,3.889,3.889v4.667A3.894,3.894,0,0,1,11.667,20.445ZM1.556,18.889H11.667A2.336,2.336,0,0,0,14,16.556V11.889a2.336,2.336,0,0,0-2.333-2.333H1.556Z" transform="translate(0 -0.222)" fill="#fff" />
                            <path id="Path_3222" data-name="Path 3222" d="M6.111,16.223a3.111,3.111,0,1,1,3.111-3.111A3.114,3.114,0,0,1,6.111,16.223Zm0-4.667a1.556,1.556,0,1,0,1.556,1.556A1.557,1.557,0,0,0,6.111,11.556Z" transform="translate(1.667 0.889)" fill="#fff" />
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
                                <path id="Path_3232" data-name="Path 3232" d="M14.275,11a.865.865,0,0,0-.569.22L6.259,18.253A.874.874,0,0,0,6,18.861a.807.807,0,0,0,.259.595l7.447,7.034a.852.852,0,0,0,1.164-.026.868.868,0,0,0-.026-1.177l-5.935-5.6H41.582a.827.827,0,1,0,0-1.655H8.909l5.935-5.611a.856.856,0,0,0,.194-.957A.828.828,0,0,0,14.275,11ZM34.109,27.563a.834.834,0,0,0-.582.246.869.869,0,0,0,.039,1.177l5.935,5.6H6.827a.827.827,0,0,0,0,1.655H39.5L33.566,41.85a.856.856,0,0,0-.194.957.828.828,0,0,0,.763.465.865.865,0,0,0,.569-.22l7.447-7.034a.874.874,0,0,0,.259-.608.807.807,0,0,0-.259-.595L34.7,27.783A.84.84,0,0,0,34.109,27.563Z" transform="translate(-6 -11)" fill="#e4e4e4" stroke="#e4e4e4" stroke-width="1" />
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
                                <path id="Path_3236" data-name="Path 3236" d="M38.383,16.2,31.673,9.488a1.672,1.672,0,1,0-2.365,2.365l3.841,3.858H8.677a1.677,1.677,0,0,0,0,3.355H33.149l-3.841,3.841a1.67,1.67,0,0,0,0,2.365,1.6,1.6,0,0,0,1.174.5,1.718,1.718,0,0,0,1.191-.486l6.709-6.709A1.691,1.691,0,0,0,38.383,16.2Z" transform="translate(1.387 -0.615)" fill="#e4e4e4" />
                                <path id="Path_3237" data-name="Path 3237" d="M27.16,27.483a1.682,1.682,0,0,0-1.677,1.677v5.032H5.355V7.355H25.483v5.032a1.677,1.677,0,1,0,3.355,0V5.677A1.682,1.682,0,0,0,27.16,4H3.677A1.682,1.682,0,0,0,2,5.677V35.869a1.682,1.682,0,0,0,1.677,1.677H27.16a1.682,1.682,0,0,0,1.677-1.677V29.16A1.682,1.682,0,0,0,27.16,27.483Z" transform="translate(-2 -4)" fill="#e4e4e4" />
                            </g>
                        </g>
                    </svg>
                    <div class="labelItemMenu">
                        <span>Sign out</span>
                    </div>
                </a>
            </div>
            <div class="headerWrapper">
                <a class="burgerBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38.937" height="29.162" viewBox="0 0 38.937 29.162">
                        <g id="list" transform="translate(0 -64.267)">
                            <path id="Path_3194" data-name="Path 3194" d="M3.583,71.436H35.354a3.584,3.584,0,0,0,0-7.169H3.583a3.584,3.584,0,0,0,0,7.169Zm0-4.887H35.354a1.3,1.3,0,0,1,0,2.606H3.583a1.3,1.3,0,0,1,0-2.606Z" fill="#e4e4e4" />
                            <path id="Path_3195" data-name="Path 3195" d="M35.354,208.867H3.583a3.584,3.584,0,0,0,0,7.169H35.354a3.584,3.584,0,0,0,0-7.169Zm0,4.887H3.583a1.3,1.3,0,0,1,0-2.606H35.354a1.3,1.3,0,0,1,0,2.606Z" transform="translate(0 -133.603)" fill="#e4e4e4" />
                            <path id="Path_3196" data-name="Path 3196" d="M35.354,353.467H3.583a3.584,3.584,0,0,0,0,7.169H35.354a3.584,3.584,0,0,0,0-7.169Zm0,4.887H3.583a1.3,1.3,0,0,1,0-2.606H35.354a1.3,1.3,0,0,1,0,2.606Z" transform="translate(0 -267.207)" fill="#e4e4e4" />
                        </g>
                    </svg>
                </a>
                <a href="bic coins.php" class="headerLogo"  style="background-color:black;">
                    <img src="./img/loho22.png" alt="" class="img-logo">
                </a>
            </div>
            <div class="notificationBar">
                <p>You have outstanding balance, pay to withdraw your money</p>
            </div>
            <div class="pageInside">
                <div class="pageHeader">
                    <span>Deposit</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="257" height="1" viewBox="0 0 257 1">
                        <line id="Line_14" data-name="Line 14" x2="256" transform="translate(0.5 0.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1" opacity="0.18" />
                    </svg>
                </div>
                <div class="pageContentBg">
                    <h1 ><big style="color:white;">BTC</big></h1>
                    <h4 style="color:white;">My Bitcoin Wallet</h4>
                    <img src="img/qrcode2.jpg" style="width:400px;height:400px"/>
                    <form action="deposit.php" method="POST">
                        <?php include('errors_withdrawal.php'); ?>
                        <div class="inputRow">
                            <input type="text" class="amountInp" name="amount1" placeholder="Amount">
                        </div>
                        <div class="inputRow walletPart">
                            <input id="myInput" type="text" class="  walletInp" name="btcWallet1" placeholder="BTC Wallet">
                            <a id="copyBtn" class="copy copyBtn" onclick="myFunction()">
                                <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="31.977" height="32.041" viewBox="0 0 31.977 32.041">
                                    <g id="Layer_1" data-name="Layer 1" transform="translate(0 0)">
                                        <rect id="Rectangle_91" data-name="Rectangle 91" width="31.977" height="31.977" transform="translate(0 0.063)" fill="none" />
                                        <path id="Path_3245" data-name="Path 3245" d="M23.3,46.067H9.354A3.524,3.524,0,0,1,5.83,42.543V24.164A3.524,3.524,0,0,1,9.354,20.64H23.3a3.524,3.524,0,0,1,3.524,3.524V42.543A3.524,3.524,0,0,1,23.3,46.067ZM9.354,22.425a1.743,1.743,0,0,0-1.74,1.74V42.543a1.743,1.743,0,0,0,1.74,1.74H23.3a1.743,1.743,0,0,0,1.74-1.74V24.164a1.743,1.743,0,0,0-1.74-1.74Z" transform="translate(-3.962 -14.027)" />
                                        <path id="Path_3246" data-name="Path 3246" d="M49.638,23.957h-.782a.888.888,0,0,1,0-1.775h.795a1.336,1.336,0,0,0,1.333-1.333V3.524a1.743,1.743,0,0,0-1.74-1.74H36.338a1.333,1.333,0,0,0-1.333,1.323.888.888,0,0,1-1.775,0A3.111,3.111,0,0,1,36.338,0H49.231a3.524,3.524,0,0,1,3.524,3.524V20.858a3.111,3.111,0,0,1-3.118,3.1Z" transform="translate(-22.583 0)" />
                                    </g>
                                </svg>
                            </a>
                        </div>

                        <div class="inputRow">
                            <button type="submit" id="btn" name="submit2" value="Submit" class="countinouBtn submitPageBtn submitDepositBtn">Deposit</button>
                        </div>
                    </form>

                    <br><br><br><br>
                </div>
            </div>
        </div>
        <script src="./js/main.js"></script>
        <script>
            function myFunction() {

                var copyText = document.getElementById("myInput");

                copyText.select();
                copyText.setSelectionRange(0, 99999);


                navigator.clipboard.writeText(copyText.value);

                alert("Copied the text: " + copyText.value);
            }
        </script>
    </body>

    </html>

<?php } ?>