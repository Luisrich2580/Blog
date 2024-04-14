<?php

include('./connection.php');


if (isset($_POST['add'])) {
    $content_title = $_POST['title'];
    $content_description = $_POST['description'];
    $content_img = $_POST['img'];

    $sql = "INSERT INTO `contents`(`tittle`, `description`, `image`) VALUES ('$content_title','$content_description','$content_img')";
    $res = mysqli_query($conn, $sql);

    if (!$res) {
        die("Failed To Connect To The Database");
    } else {
        echo 'Connected';
    }
}
