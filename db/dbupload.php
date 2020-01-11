
<?php

session_start();

// Upload File

$target_dir = "../photos/";
$imageFileType = strtolower(pathinfo(basename($_FILES["file"]["name"]),PATHINFO_EXTENSION));
$hashname = hash_file('md5', $_FILES["file"]["tmp_name"]) . "." . $imageFileType;
$target_file = $target_dir . $hashname;
$name = $_FILES["file"]["name"];
$uploadOk = 1;

print_r($_FILES);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
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
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        
        // INSERT TO DB
        
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "mauriceinstagram";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO posts (url, timestamp, user_id) VALUES (?, now(), ?)");
        $stmt->bind_param("si", $path, $uploader_id);

        // set parameters and execute
        $path = $hashname;
        $uploader_id = $_SESSION["id"];


        $stmt->execute();

        echo "New records created successfully";
        print_r($stmt);
        $stmt->close();
        $conn->close();
        
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";

        $src = "../photos/" . $path;
        $dest = "../photos/th_" . $path;
        make_thumb($src, $dest, 500);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

function make_thumb($src, $dest, $desired_width) {

    /* read the source image */
    $source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);

    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height * ($desired_width / $width));
    $desired_height = $desired_width;

    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

    /* copy source image at a resized size */
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $width);

    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image, $dest);
}

echo "<br><br>" . $path . "<br>";


?>
