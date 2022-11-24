<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qr Code</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- <link rel="stylesheet" href="/css/qrCode.css" /> -->
    <link href="css/qrCode.css" rel="stylesheet">
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
                    <a href="totalFee.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Total Fee</a>
                    <a href="qrCode.php" class="nav-item nav-link active"><i class="fa fa-chart-bar me-2"></i>QR Generator</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <div class="content">
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <!-- <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a> -->
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
  <div class="user-input-section">
    <section class="heading">
      <div class="title">QRcodes</div>
      <div class="sub-title">Generate QRCode for anything!</div>
    </section>
    <section class="user-input">

      <input type="text" placeholder="Type something..." name="input_text" id="myInput" autocomplete="off" style="height:50px;
      width:60%">
      <a id="copyBtn" class="copy copyBtn" style="margin-top:15px" onclick="myFunction()">
        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="31.977" height="32.041" viewBox="0 0 31.977 32.041">
          <g id="Layer_1" data-name="Layer 1" transform="translate(0 0)">
            <rect id="Rectangle_91" data-name="Rectangle 91" width="31.977" height="31.977" transform="translate(0 0.063)" fill="none" />
            <path id="Path_3245" data-name="Path 3245" d="M23.3,46.067H9.354A3.524,3.524,0,0,1,5.83,42.543V24.164A3.524,3.524,0,0,1,9.354,20.64H23.3a3.524,3.524,0,0,1,3.524,3.524V42.543A3.524,3.524,0,0,1,23.3,46.067ZM9.354,22.425a1.743,1.743,0,0,0-1.74,1.74V42.543a1.743,1.743,0,0,0,1.74,1.74H23.3a1.743,1.743,0,0,0,1.74-1.74V24.164a1.743,1.743,0,0,0-1.74-1.74Z" transform="translate(-3.962 -14.027)" />
            <path id="Path_3246" data-name="Path 3246" d="M49.638,23.957h-.782a.888.888,0,0,1,0-1.775h.795a1.336,1.336,0,0,0,1.333-1.333V3.524a1.743,1.743,0,0,0-1.74-1.74H36.338a1.333,1.333,0,0,0-1.333,1.323.888.888,0,0,1-1.775,0A3.111,3.111,0,0,1,36.338,0H49.231a3.524,3.524,0,0,1,3.524,3.524V20.858a3.111,3.111,0,0,1-3.118,3.1Z" transform="translate(-22.583 0)" />
          </g>
        </svg>
      </a>


      <button class="button" type="submit" style=";margin-top:20px">Generate<i class="fa-solid fa-rotate"></i></button>


    </section>
    <script>
      function myFunction() {

        var copyText = document.getElementById("myInput");

        copyText.select();
        copyText.setSelectionRange(0, 99999);


        navigator.clipboard.writeText(copyText.value);

        alert("Copied the text: " + copyText.value);
      }
    </script>
  </div>
  <div class="qr-code-container">
    <div class="qr-code"></div>
  </div>  </div>
</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script>
  let btn = document.querySelector(".button");
  let qr_code_element = document.querySelector(".qr-code");

  btn.addEventListener("click", () => {
    let user_input = document.querySelector("#input_text");
    if (user_input.value != "") {
      if (document.querySelector(".qr-code").childElementCount == 0) {
        generate(user_input);
      } else {
        document.querySelector(".qr-code").innerHTML = "";
        generate(user_input);
      }
    } else {
      document.querySelector(".qr-code").style = "display: none";
      console.log("not valid input");
    }
  })

  function generate(user_input) {
    qr_code_element.style = "";

    var qrcode = new QRCode(qr_code_element, {
      text: `${user_input.value}`,
      width: 350, //128
      height: 350,
      colorDark: "#000000",
      colorLight: "#ffffff",
      correctLevel: QRCode.CorrectLevel.H
    });

    let download = document.createElement("button");
    qr_code_element.appendChild(download);

    let download_link = document.createElement("a");
    download_link.setAttribute("download", "qr_code.png");
    download_link.innerHTML = `Download <i class="fa-solid fa-download ">
    </i>`;

    download.appendChild(download_link);

    let qr_code_img = document.querySelector(".qr-code img");
    let qr_code_canvas = document.querySelector("canvas");

    if (qr_code_img.getAttribute("src") == null) {
      setTimeout(() => {
        download_link.setAttribute("href", `${qr_code_canvas.toDataURL()}`);
      }, 300);
    } else {
      setTimeout(() => {
        download_link.setAttribute("href", `${qr_code_img.getAttribute("src")}`);
      }, 300);
    }
  }

  generate({
    value: "https://murtuzaalisurti.github.io/qr"
  });
</script>