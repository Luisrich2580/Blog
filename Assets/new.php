<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Add Contents</title>
</head>

<body>


    <div class="container p-5">
        <?php
        include('connection.php');

        $id = $_GET['id'];

        $sql = "SELECT * FROM `contents` WHERE  `id` = '$id' ";
        $query = mysqli_query($conn, $sql);


        $row = mysqli_fetch_assoc($query);
        ?>

        <div class="card mb-3">
            <img src=img/<?php echo $row['image']; ?> class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center fw-bold"><?php echo $row['tittle']; ?></h5>
                <p class="card-text"><?php echo $row['description']; ?></p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <?php







        ?>
    </div>