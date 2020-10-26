<!DOCTYPE html>
<html lang="en">
<title>QRcodeScanner</title>
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
    background-image:url('../images/coffee_background4(1).png');
  }
</style>
<body id='body_QRcodeScanner'>
  <!-- sticky footer -->
  <div class="wrapper" id=wrapper>
    <!-- nav bar -->
      <ul>
        <li id='head-container'>
          <a href="#home">QRcode掃描集點</a>
        </li>
      </ul>
      <p id='QRcode_prompt'>請將QRcode圖片放置攝影機前</p>
    <!-- main container -->
    <div class="container" id='contain'>
      <br />
      <!-- image viewer -->
      <div class="row" id="card-item-container">
          <div class="card" id='card'>
            <div id="image-container" class="card-content">
              <video id="webcam" preload autoplay loop muted></video>
            </div>
          </div>
      </div>
    </div>

    <!-- footer pusher -->
    <div class="push"></div>
  </div>

  <footer class="footer flex-container">
    <div class="footer-copyright">
      <div class="flex-item">
        
        <i class="fas fa-heart"></i> by
        <a class="orange-text text-lighten-3" target="_BLANK" href="#">Instascan</a>
        &nbsp; | &nbsp;
        <a class="orange-text text-lighten-3" target="_BLANK" href="https://github.com/schmich/instascan">
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
  <script src="js/instascan.min.js"></script>
  <script src="js/QRcodeToSQL.js"></script>


<script type="text/javascript">
    flag=0;
    $(function() {
      flag=0;
  // Handler for .ready() called.
  $("#success").hide(500)
  $("#show_point").hide(500)
});
let scanner = new Instascan.Scanner({ video: document.getElementById('webcam') });
scanner.addListener('scan', function (content) {
        scanner.stop()
        removeVideo()
        createText()
        ToSQL_IncreaseTime(content)
        sleep(500)
        showpoint(content)
        btnc()
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
  function createText(){
    var text='<div id="point_div"style="text-align:center;"><span id="success">恭喜！！！集點成功 </span><span id="show_point"> 您目前累積 <span id="point"style="text-decoration:underline;color:white;"></span> 點</span></div>'
    var span=document.getElementById('contain')
   span.innerHTML =text
  }
  function showpoint(QRcode){
        var point=ToSQL_getTime(QRcode);
        console.log('point='+point)
        document.getElementById("point").innerHTML =point
      }
  function sleep(milliseconds) 
{ 
var start = new Date().getTime(); 
while(1)
     if ((new Date().getTime() - start) > milliseconds)
          break;
}
function removeVideo(){
        var video=document.getElementById('card')
        video.remove()
      }
  function btnc(argument) {
  // body...
  if(flag==0) 
    {
      flag=1;
    $("#show_point").show(500)
    $("#success").show(500)
  }
  else
  {
    flag=0;
    $("#show_point").hide(500)
    $("#success").hide(500)
    location.reload();

  }
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
