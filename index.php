<?php include('Assets/header.php') ?>

<?php include('Assets/connection.php');



?>
<div class="container mt-4 mb-4">
    <div class="row gy-4">

        <?php
        $content = 'SELECT * FROM `contents`';
        $show = mysqli_query($conn, $content);
        while ($row = mysqli_fetch_assoc($show)) {
        ?>

            <div class="col-md-12 col-lg-4 clickable_card" onclick="window.location.href='new.php';">
                <div class="card">
                    <img style="max-height:  234px;" src=Assets/img/<?php echo $row['image']; ?> class="card-img-top" alt="Content Image">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold"><?php echo $row['tittle'] ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
</div>





<script src="Assets/js/bootstrap.bundle.js"></script>
</body>

</html>