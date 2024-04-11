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

<?php
}
?>

<script src="Assets/js/bootstrap.bundle.js"></script>
</body>

</html>