<!doctype html>
<html lang="en" manifest="manifest.manifest">
<head>
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="apple-touch-icon" href="/custom_icon.png" />
  <link rel="apple-touch-startup-image" href="img/startup.png">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <style>
        body{
            font-family: sans-serif;
        }
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        .inputfile + label {
            font-size: 2em;
            padding: 40px;
            font-weight: 700;
            color: white;
            background-color: #ffa500;
            display: inline-block;
        }
        .inputfile + label {
            cursor: pointer;
        }
        button{
          height: 75px;
          width: 200px;
          border-radius: 0px;
        }

    </style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-header">
              <a class="navbar-brand" href="index.php">WeART</a>
          </div>
      </div>
      <!-- /.container -->
  </nav>
  <div style="position: fixed; bottom: 0px; width: 100%; height: 60px; z-index: 100; background-color: #fff; border-top: 2px solid #b5b5b5;" class="text-center">
      <div class="col-xs-6">
        <a href="camera.php">
            <img src="img/photo-camera.png" height="50px">
        </a>
      </div>
      <div class="col-xs-6">
        <a href="index.php">
            <img src="img/heart.png" height="50px">
        </a>
      </div>
  </div>
  <!-- Page Content -->
  <div class="container text-center">
    <form action="eser.php" id="form1" name="form1" enctype="multipart/form-data" method="post">
        <input type="file" id="fileToUpload"  name="fileToUpload" accept="image/*" capture="camera" class="inputfile">
        <label for="fileToUpload">Take Photo<br><img src="img/photo-camera.png" height="50px"></label><br>
        <button name="submit" type="submit" value="Save">Okay!</button>
    </form>
  </div>
  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
