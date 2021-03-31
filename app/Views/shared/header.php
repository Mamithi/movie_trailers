<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
<!--    --><?//=link_tag('public/css/main.css')?>
    <title>Movie Trailers</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url() . '/' . $_SESSION['lang']?>/movies"><?= lang("Text.page_title") ?></a>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <?= lang("Text.account") ?>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li class="dropdown-item" ><?php echo $_SESSION['firstname'] . ' ' .$_SESSION['lastname'] ?><li>
                <li><a class="dropdown-item" href="<?php echo base_url() . '/' . $_SESSION['lang']?>/change/password"><?= lang("Text.change_password") ?></a></li>
                <li><a class="dropdown-item" href="<?php echo base_url()?>/logout"><?= lang("Text.logout") ?></a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
    body {
        background: #cdcdcd;
    }
</style>