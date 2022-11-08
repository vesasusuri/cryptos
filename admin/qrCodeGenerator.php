<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qr Code Generator</title>
  <link rel="stylesheet" href="./css/qrCode.css" />
</head>

<body>
  <a href="adminDashboard.php"><img src="backarrow.svg" style="width:60px;height:60px" /></a>
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
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

</html>

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