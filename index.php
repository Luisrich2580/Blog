<?php include('Assets/header.php') ?>

<?php include('Assets/connection.php');

$content = 'SELECT * FROM `contents`';
$show = mysqli_query($conn, $content);
while ($row = mysqli_fetch_assoc($show)) {

?>
    <div class="container-fluid">
        <div class="row gy-4 m-3">
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <img src=<?php echo $row['image']; ?> class="card-img-top" alt="Content Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold"><?php echo $row['tittle'] ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create A New Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="insert_content.php" method="POST">
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
            </div>
        </div>
    </div>

<?php
}
?>

<script src="Assets/js/bootstrap.bundle.js"></script>
</body>

</html>