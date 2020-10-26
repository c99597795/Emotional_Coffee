<!DOCTYPE html>
<html lang="zh-TW">

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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/cmu-sans-serif" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
    crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
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
      
        <div style="position: relative" class="margin">
            <video onplay="onPlay(this)" id="inputVideo" autoplay muted></video>
            <canvas id="overlay">
        </div>
    </div>

    <!-- footer pusher -->
    <div class="push"></div>
  </div>



  <!-- UI scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <!-- tf -->
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@0.9"></script>
  <!-- utils -->
  <script src="js/tracking-min.js"></script>
  <script src='js/face-api.min.js'></script>
  <script src="js/face-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.all.min.js"></script>
  <!--Local js-->
  <script src="js/util.js"></script>
  <script src="js/model_emotion.js"></script>
  <script src="js/model_gender.js"></script>
  <script src='js/recognition.js'></script>
  <script src="js/webcam.js"></script>

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
