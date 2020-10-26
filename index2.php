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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/cmu-sans-serif" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
    crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- sticky footer -->
  <div class="wrapper">
    <!-- nav bar -->
    <nav class="red accent-4" role="navigation">
      <div id="head-container" class="nav-wrapper container">
        <a id="logo-container" href="https://tupleblog.github.io/face-classification-js" class="">face-classification-js</a>
      </div>
    </nav>

    <!-- main container -->
    <div id="main-container" class="container">
      <br />
      <!-- uploader -->
      <div class="row">
        <div class="col s0 m3"></div>
        <div class="col s12 m6">
          <p>Select your photo</p>
          <div class="file-field input-field">
            <div class="btn  light-blue darken-2">
              <span>Select photo</span>
              <input type="file" id="local_file">
              <i class="material-icons right">add_a_photo</i>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        <div class="col s0 m3"></div>
      </div>

      <!-- uploader -->
      <div class="row">
        <div class="col s0 m3"></div>
        <div class="col s12 m6">
          <div class="input-field">
            <input id="input_url" type="text" placeholder=" ">
            <label for="input_url">or pasting image URL</label>
          </div>
        </div>
        <div class="col s12 m1"><button id="btn-share" class="waves-effect waves-light btn light-blue darken-2">Share</button></div>
        <div class="col s0 m2"></div>
      </div>


      <div id="image-loading" class="row" style="text-align: center; display: none;">
        <div class="preloader-wrapper active small">
          <div class="spinner-layer spinner-red-only">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div><div class="gap-patch">
              <div class="circle"></div>
            </div><div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3"><button id="btn-manual" class="waves-effect waves-light btn light-blue darken-2">Manual crop</button></div>
      </div>

      <!-- image viewer -->
      <div class="row" id="card-item-container">
        <div class="col s12 m6">
          <div class="card">
            <div id="image-container" class="card-content">
              <div>
                <img id="show-img" src="" crossOrigin="Anonymous" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer pusher -->
    <div class="push"></div>
  </div>

  <footer class="footer red accent-4 flex-container">
    <div class="footer-copyright">
      <div class="flex-item">
        Made with
        <i class="fas fa-heart"></i> by
        <a class="orange-text text-lighten-3" target="_BLANK" href="https://tupleblog.github.io/">tupleblog</a>
        &nbsp; | &nbsp;
        <a class="orange-text text-lighten-3" target="_BLANK" href="https://github.com/tupleblog/face-classification-js">
          <i class="fab fa-github"></i> face-classification-js</a>
      </div>
    </div>
  </footer>

  <!-- UI scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <!-- tf -->
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@0.9"></script>

  <!-- utils -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pako/1.0.6/pako.min.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tracking.js/1.1.3/tracking-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tracking.js/1.1.3/data/face-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.js"></script>

  <script src="js/util.js"></script>
  <script src="js/model_emotion.js"></script>
  <script src="js/model_gender.js"></script>
  <script src="js/index.js"></script>
</body>

</html>