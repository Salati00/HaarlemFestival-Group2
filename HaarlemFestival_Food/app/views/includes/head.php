<!DOCTYPE html>
<html lang="en">
<head>
    <title>Food Event Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= URLROOT .'/public/css/bootstrap.min.css'?>">
    <script src="<?= URLROOT .'/public/jquery/jquery.min.js'?>"></script>
    <script src="<?= URLROOT .'/public/js/bootstrap.js'?>"></script>
    <script src="<?= URLROOT .'/public/js/bootstrap-multiselect.min.js'?>"></script>
    <script src="<?=URLROOT .'/public/js/script.js'?>"></script>
    <link rel="stylesheet" href="<?= URLROOT . '/public/css/style.css' ?>">
</head>
<body class>
<nav class="navbar navbar-expand-lg navbar-purple">
    <section class="container-fluid">
        <a class="navbar-brand" href="#">Haarlem Festival</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <section class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo URLROOT; ?>/Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/Jazz">Jazz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/History">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/food_home">Food</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </section>
    </section>
</nav>

