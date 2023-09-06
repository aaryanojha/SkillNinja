<?php
include("db.php");
if (isset($_POST['upload'])) {
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_destination = "upload/" . $file_name;
    if (move_uploaded_file($temp_name, $file_destination)) {
        $q = "INSERT INTO video (name) VALUES ('$file_name')";

        if (mysqli_query($conn, $q)) {
            echo "Video uploaded successfully.";
        } else {
            echo "Something went wrong??";
        }
    } else {
        echo "Please select a video-to-upload.";
    }
}
?>