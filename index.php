<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <meta property="og:title" content="Face Classification JS">
  <meta property="og:description" content="ตรวจจับอารมณ์และเพศของใบหน้าบนเว็บบราวเซอร">
  <meta property="og:url" content="https://tupleblog.github.io/face-classification-js/">
  <meta property="og:site_name" content="face-classification-js">
  <meta property="og:image" content="https://tupleblog.github.io/face-classification-js/images/face_classification_og.png">
  <title></title>

  <!-- CSS  -->
  <link href="css/cmu-sans-serif.css" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="css/cmu-sans-serif.css" type="text/css" />
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link href="css/style.css" rel="stylesheet">
</head>
<style>
  body{
    background-image:url('../images/coffee_background5.jpg');
  }
</style>
<body id='body_index'>
  <!-- sticky footer -->
  <div class="wrapper" id=wrapper>
    <!-- nav bar -->
      <ul>
        <li id='head-container'>
          <a href="#home">情感計價機</a>
        </li>
      </ul>

    <!-- main container -->
    <div class="container" id='contain'>
      <br />

      <!-- image viewer -->
      <div class="row" id="card-item-container">
        <div class="col s12 m6">
          <div class="card">
            <div id="image-container" class="card-content">
              <video id="webcam" preload autoplay loop muted></video>
              <canvas id="canvas_webcam"></canvas>
            </div>
          </div>
          <span id="show_Price">獲得: <span id="price"></span>元 折扣</span>
        </div>

        <div class="col s12 m6" id=''>
          <div class="card">
            <div id="result-container" class="card-content">

              <div class="chart-result-profile-webcam" style="display: block; text-align: center;">
                <canvas id="face_profile_chart" width="64" height="64"></canvas>
                <canvas id="face_profile_greyscale" width="64" height="64" style="display: none;"></canvas>
              </div>
              <div>
                  <canvas id="chart_emotion"></canvas>
              </div>
              <div>
                  <canvas id="chart_gender" style="display: none"></canvas>
              </div>

            </div>

          </div>
            <h2><button class="btn-large red  waves-effect waves-light"  style="font-size:32px;" onclick="btnc()">試算</button> <br><br>
            </h2>
            <h2 id='QRcode'>
              <button id='QRcodebutton'class="btn-large red  waves-effect waves-light"  style="font-size:32px;" onclick="QRcodeWindow()">會員專屬碼</button>
              <button id='QRcodebutton'class="btn-large red  waves-effect waves-light"  style="font-size:32px;" onclick="ToQRcodeScanner()">　集點　</button>
            </h2>
            <div id="qrcode"></div>
        </div>
      </div>
    </div>

    <!-- footer pusher -->
    <div class="push"></div>
  </div>

  <footer class="footer flex-container">
    <div class="footer-copyright">
      <div class="flex-item" id="footer">
        
        <i class="fas fa-heart"></i> by
        <a class="orange-text text-lighten-3" target="_BLANK" href="#">情感咖啡攤</a>
        &nbsp; | &nbsp;
        <a class="orange-text text-lighten-3" target="_BLANK" href="https://github.com/tupleblog/face-classification-js">
          <i class="fab fa-github"></i> </a>
      </div>
    </div>
  </footer>

  <!-- UI scripts -->
  <script src="jquery/jquery-2.1.1.min.js"></script>
  <script src="jquery/materialize.min.js"></script>
  <script type="text/javascript" src="jquery/adapter.min.js"></script>
  <script type="text/javascript" src="jquery/vue.min.js"></script>
  <!-- tf -->
  <script src="Tensorflow/tfjs@0.9.js"></script>
  <!-- utils -->
  <script src="js/tracking-min.js"></script>
  <script src="js/face-min.js"></script>
  <script src="jquery/Chart.bundle.min.js"></script>
  <script src="jquery/sweetalert2.all.min.js"></script>
  <!--Local js-->
  <script src="js/util.js"></script>
  <script src="js/model_emotion.js"></script>
  <script src="js/model_gender.js"></script>
  <script src="js/webcam.js"></script>
  <script src="js/jquery.qrcode.min.js"></script>
  <script src='js/QRcodeToSQL.js'></script>

  <script type="text/javascript">
    flag=0;
    $(function() {
      flag=0;
  // Handler for .ready() called.
  $("#show_Price").hide(500)

});

function btnc(argument) {
  // body...
  if(flag==0) 
    {
      flag=1;
    $("#show_Price").show(500)
  }
  else
  {
    flag=0;
    $("#show_Price").hide(500)
    location.reload();

  }
}
function ToQRcodeScanner(){
  //window.location = "QRcodeScanner.php";
  window.open('QRcodeScanner.php','QRcodeScanner',config='height=850,width=1280,left=280')
}
function QRcodeWindow(){
  window.open('QRcode.html','QRcode',config='height=540,width=540,left=720,top=250')
  console.alert('Should be Success')
}
</script>
  <style>
  #card-item-container {
    visibility: visible;
  }
  #image-container {
    position: relative;
  }
  </style>
</body>

</html>
