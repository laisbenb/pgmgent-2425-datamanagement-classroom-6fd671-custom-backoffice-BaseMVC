<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ($title ?? '') . ' ' . $_ENV['SITE_NAME'] ?></title>
    <link rel="stylesheet" href="/css/main.css?v=<?php if ($_ENV['DEV_MODE'] == "true") {
                                                        echo time();
                                                    }; ?>">
</head>

<body>
    <header>
        <div class="header__logo">MoviePlace</div>
        <nav class="header__nav">
            <a href="/" class="header__link">Home</a>
            <a href="/movie" class="header__link">Movies</a>
            <a href="/movie/add" class="header__link">Add movies</a>
            <a href="/genre" class="header__link">Genres</a>
            <a href="/genre/add" class="header__link">Add Genres</a>
            <a href="/dashboard" class="header__link">Dashboard</a>
        </nav>
    </header>