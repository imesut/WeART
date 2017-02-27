<?php
  if(isset($_GET["id"])){
    $id = strval($_GET["id"]);
    $liste = json_decode(file_get_contents("data.json"), true);
    echo $liste;
    $name = $liste[$id][name];
    $artist = $liste[$id][artist];
    $photo = $liste[$id][photo];
    $similars = $liste[$id][similars];
    $physicalDescription = $liste[$id][physicalDescription];
    $artfulDescription = $liste[$id][artfulDescription];
    $locationList = $liste[$id][locationList];
    $voice = $liste[$id][voice];
  };
?>
<!DOCTYPE html>
<html lang="en" manifest="manifest.manifest">

<head>
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="apple-touch-startup-image" href="img/startup.png">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
    body{
        padding-bottom: 150px;
    }
    </style>

    <title><?php echo $name; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">WeART</a>
            </div>
        </div>
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
    <div class="container" style="margin-top: 70px">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $name; ?><h5><?php echo $artist; ?></h5>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="<?php echo $photo; ?>" alt="">
            </div>

            <div class="col-md-4">
                <h5>About Artwork</h5>
                <p3><?php echo $physicalDescription ; ?></p3>
                <?php
                  if($voice != ""){
                    echo '<audio controls>';
                    echo '  <source src="'.$voice.'" type="audio/mpeg">';
                    echo '</audio>';
                  };
                ?>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h5 class="page-header">Other Artworks You May Like</h5>
            </div>

            <?php
              if($similars != ""){
                foreach ($similars as $item){
                  $item = (string)$item;
                  $name = $liste[$item][name];
                  $artist = $liste[$item][artist];
                  $photo = $liste[$item][photo];
                  echo '<div class="col-sm-3 col-xs-6">';
                  echo '  <a href="eser.php?id=' . $item .'">';
                  echo '    <img class="img-responsive portfolio-item" src="'.$photo.'" alt="">';
                  echo '    <h6>' . $name . '</h6>';
                  echo '  </a>';
                  echo '</div>';
                };
              };
            ?>



        </div>
        <div class="row">
            <?php
              if($locationList != ""){
                echo "<center>";
                  echo $locationList;
                  echo "</center>";
                };
            ?>
        </div>
        <!-- /.row -->

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
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
