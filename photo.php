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
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}?>

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

  $id = "1000";
 ?>
