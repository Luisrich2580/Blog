<!-- Modal -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Add Contents</title>
</head>

<body>
    <?php include('connection.php');
    include('./header.php')
    ?>


    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create A New Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> -->
    <div class="container mt-5">
        <form action="modal.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Content Head</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div class="form-text">Make Sure Your Content Name Is Unique.</div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Description textarea</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Add Image</label>
                <input type="file" name="img" class="form-control">
            </div>
            <!-- <imp type="button" name="add" class="btn btn-primary mt-3">Add Content</button> -->
            <input type="submit" value="Add Content" name="add" class="btn btn-primary mt-3">
        </form> 
    </div>
    <!-- </div>
        </div>
    </div>
</div> -->

    <?php


    if (isset($_POST['add'])) {
        $content_title = $_POST['title'];
        $content_description = $_POST['description'];
        $content_img = $_POST['img'];


        $sql = "INSERT INTO `contents`(`tittle`, `description`, `image`) VALUES ('$content_title','$content_description','$content_img')";
        $res = mysqli_query($conn, $sql);

        if (!$res) {
            die("Failed To Connect To The Database");
        } else {
            header('location:../index.php');
        }
    }

    ?>