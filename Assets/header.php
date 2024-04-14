<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <title>Blog</title>

    <style>
        .clickable_card{
            cursor: pointer;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Random Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="Assets/modal.php"><button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Content</button></a>
                </form>
            </div>
        </div>
    </nav>