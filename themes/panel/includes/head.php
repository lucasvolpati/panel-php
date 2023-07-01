<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Peach Brasil | Painel</title>

    <!-- MENU STYLES -->
    <!-- <link rel="stylesheet" href="<?= theme("/assets/css/panel/nav.css") ?>" > -->

    <!-- CSS STYLES -->
    <!-- <link rel="stylesheet" href=" /*theme() . "/assets/css/panel/home.css"*/" > -->
    <link rel="stylesheet" href="<?= theme("/assets/css/style.css") ?>" >
    <link rel="stylesheet" href="<?= theme("/assets/css/panel/nav.css") ?>">

    <!-- TRUMBOWYG STYLE -->
    <?php if($this->section("css")): ?>
        <?= $this->section('css') ?>
    <?php endif ?>

    
    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?= theme("/assets/img/favicon-peach.png") ?>" type="image/x-icon">

    <!-- BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
