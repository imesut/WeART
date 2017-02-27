<?php $liste = json_decode(file_get_contents("data.json"), true); ?>

<!DOCTYPE html>
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

    <title>WeART</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      body{
        padding-bottom: 100px;
      }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WeART</a>
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
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-5 col-xs-6">
                <h1 class="page-header">Your Favourites</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->

        <div class="row">
            <div class="col-md-4 col-xs-6 portfolio-item">
                <a href="eser_static.php?id=1000">
                    <img class="img-responsive" src="<?php echo $liste[1000][photo];?>" alt="">
                </a>
                <h5>
                    <a href="eser.php?id=1000"><?php echo $liste[1000][name];?></a>
                </h5>
                <p><?php echo substr($liste[1000][physicalDescription], 0, 100); echo "...";?></p>
            </div>
            <div class="col-md-4 col-xs-6 portfolio-item">
                <a href="eser_static.php?id=1001">
                    <img class="img-responsive" src="<?php echo $liste[1001][photo];?>" alt="">
                </a>
                <h5>
                    <a href="eser_static.php?id=1001"><?php echo $liste[1001][name];?></a>
                </h5>
                <p><?php echo substr($liste[1001][physicalDescription], 0, 100); echo "...";?></p>
            </div>
            <div class="col-md-4 col-xs-6 portfolio-item">
                <a href="eser_static.php?id=1002">
                    <img class="img-responsive" src="<?php echo $liste[1002][photo];?>" alt="">
                </a>
                <h5>
                    <a href="eser_static.php?id=1002"><?php echo $liste[1002][name];?></a>
                </h5>
                <p><?php echo substr($liste[1002][physicalDescription], 0, 100); echo "...";?></p>
            </div>
            <div class="col-md-4 col-xs-6 portfolio-item">
                <a href="eser_static.php?id=1003">
                    <img class="img-responsive" src="<?php echo $liste[1003][photo];?>" alt="">
                </a>
                <h5>
                    <a href="eser_static.php?id=1003"><?php echo $liste[1003][name];?></a>
                </h5>
                <p><?php echo substr($liste[1003][physicalDescription], 0, 100); echo "...";?></p>
            </div>
</div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-3">
                    <h9>Copyright &copy; YGA 2017</h9>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
