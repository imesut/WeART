<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo $_FILES["fileToUpload"];
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
};
?>

<?php
  $key = 'your_cloudsight_key_comes_here';
  $cmd = 'curl -i -X POST -H "Authorization: CloudSight ' . $key . '" -F "image_request[image]=@uploads/' . $_FILES["fileToUpload"]["name"] . '" -F "image_request[locale]=en-US" https://api.cloudsightapi.com/image_requests';
  exec($cmd, $response);
  $json_out = end($response);
  $json_out = $json_out;
  $json_out = json_decode($json_out, true);
  $token = $json_out[token];
  $status = $json_out[status];
  $responsecmd = 'curl -i -H "Authorization: CloudSight ' . $key . '" https://api.cloudsightapi.com/image_responses/' . $token;

    while ($status != "completed") {
      exec($responsecmd, $response);
      $json_out = end($response);
      $json_out = $json_out;
      $json_out = json_decode($json_out, true);
      $status = $json_out[status];
      if ($status != "completed") {
        sleep(1);
      }
      else{
        $name = $json_out[name];
        echo $name;
      };
      $status = $status;
      echo $status;
  };
 ?>

 <?php
   $gelen = $name;
   $gelen = "_" . $gelen;
   $aranansifir = ["mona", "lisa"];
   $arananbir = ["picasso", "blue", "nude"];
   $arananiki = ["starry", "night", "van gogh"];
   $arananuc = ["persistence", "memory", "clock", "time"];
   $gelen = strtolower(str_replace(" ", "", $gelen));
   foreach ($aranansifir as $sey) {
     $position = strpos($gelen, $sey);
     echo $position;
     if ($position > 0){
       $id = "1000";
       break;
     };
   };
   foreach ($arananbir as $sey) {
     $position = strpos($gelen, $sey);
     echo $position;
     if ($position > 0){
       $id = "1001";
       break;
     };
   };
   foreach ($arananiki as $sey) {
     $position = strpos($gelen, $sey);
     echo $position;
     if ($position > 0){
       $id = "1002";
       break;
     };
   };
   foreach ($arananuc as $sey) {
     $position = strpos($gelen, $sey);
     echo $position;
     if ($position > 0){
       $id = "1003";
       break;
     };
   };

 ?>

<?php
  if(isset($id)){
    $id = strval($id);
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
<html lang="en"  manifest="manifest.manifest">

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
                  echo '  <a href="eser_static.php?id=' . $item .'">';
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
