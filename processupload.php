<?php
$target_dir = "youcert/";
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
$upload_ok = 1;
$imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//check if upoaded image is actual or fake
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        //$isimg="file is an image - " . $check["mime"];
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
    }
}

//check if file exists
if (file_exists($target_file)) {
    $imgexists="sorry,file already exists<br>";
    $upload_ok = 0;
    echo $imgexists;
}

//allow only certain file upload
if (
    $imagefiletype != "jpg" && $imagefiletype != "png" &&
    $imagefiletype != "jpeg" && $imagefiletype != "gif"
) {
    $allowed= "only jpg,jpeg,png,gif are allowed<br>";
    $upload_ok = 0;
}


if ($upload_ok == 0) {
    $imgnotsupp="sorry,your file was not supported<br>";
    echo $imgnotsupp;
} else {
    $imgs="";
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $imgs=htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))." has been uploaded successfully.<br>";
        $imgnotsupp="";
        $imgexists="";
        //$disimguploaded="<div><img src='basename($_FILES['fileToUpload']['name'])'></div>";
    } 
    else {
        $imgs="sorry there was an error in uploading a file.<br>a";
    }
    echo $imgs;
    
}
//$target_file ="choose any image";
//echo $disimguploaded;

?>