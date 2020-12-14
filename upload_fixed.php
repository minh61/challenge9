
<?php
$target_dir = "./";

$uploadOk = 1;
$arr = explode(".", basename($_FILES["fileToUpload"]["name"]));
$fileType = $arr[count($arr) - 1];

$date = new DateTime();
$fileName = $date->getTimestamp() . "." . $fileType;

$target_file = $target_dir . $fileName;
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ". <br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
        return;
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    return;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars($fileName) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
