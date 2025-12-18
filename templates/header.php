<?php
include_once(__DIR__ . '/../helpers/url.php');
include_once(__DIR__ . '/../data/categories.php');
include_once(__DIR__ . '/../data/posts.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr Noemi Nascimento</title>

   <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">


    <!-- GOOGLE FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <a href="<?= $BASE_URL ?>" id="logo">
        <img src="<?= $BASE_URL ?>img/logo.fisio.jpg" alt="Fisio N">
    </a>

    <nav>
        <ul id="navbar">
            <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Categorias</a></li>
            <li><a href="#" class="nav-link">Sobre</a></li>
        </ul>
    </nav>
</header>
