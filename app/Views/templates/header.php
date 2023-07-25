<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--<link href="<?= base_url('Vendor') ?>/styles/global.css" rel="stylesheet">
    <link href="<?= base_url('Vendor') ?>/styles/fonts.css" rel="stylesheet">
    <link href="<?=base_url('Vendor')?>/styles/footer.css" rel="stylesheet"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        .logo{
            font-family: 'Oooh Baby', cursive;
        }

        nav{
            font-family: 'Roboto', sans-serif;
        }

        ul.navbar-nav > li.nav-item > a.nav-link {
            color: white;
        }

        ul.navbar-nav > li.nav-item > a.nav-link:hover {
            border-bottom: 2.5px solid #6C1528;
        }

        ul.dropdown-menu {
            background-color: black;
            color: white;
        }

        ul.dropdown-menu > li > a {
            color: white;
        }

        ul.dropdown-menu > li > a:hover {
            background-color: black;
            color: #6C1528;
        }

        a.btn-head {
            color: #6C1528;
            border: 2px solid #6C1528;
        }

        a.btn-head:hover {
            background-color: #6C1528;
            color: white;
        }

        footer a.nav-link  {
            color: white;
        }

        footer a.nav-link:hover  {
            color: #6C1528;
            text-decoration: underline;
        }

        @media all and (min-width: 992px) {
            .navbar .nav-item .dropdown-menu{ display: none; }
            /* .navbar .nav-item:hover .nav-link{   } */
            .navbar .nav-item:hover .dropdown-menu{ display: block; }
            .navbar .nav-item .dropdown-menu{ margin-top:0; }
        }
    </style>
    <title><?= esc($title) ?></title>
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: black;">
            <div class="container-fluid">
                <a class="navbar-brand logo fs-4" href="<?=base_url()?>Inicio" style="font-size: 1.5rem;">
                    <figure style="height: 2rem">
                        <img src="/assets/logos/Astoria.png" alt="Astoria-Logo" style="height: 100%">
                    </figure>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active"> <a class="nav-link" href="<?php base_url() ?>/Home" >Inicio </a> </li>
                        <?php if (! empty($category) && is_array($category)): ?>
                            <?php foreach ($category as $category_item): ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"><?= esc($category_item['description']) ?></a>
                                    <ul class="dropdown-menu">
                                        <?php if (! empty($subcategory) && is_array($subcategory)): ?>
                                            <?php foreach ($subcategory as $subcategory_i): ?>
                                                <?php if ($subcategory_i['id_category'] == $category_item['id']): ?>
                                                    <li><a class="dropdown-item" href="/subcategory/<?= esc($subcategory_i['id'],'url') ?>"> <?= esc($subcategory_i['name']) ?> </a></li>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        <?php else: ?>
                                            <h3>Sin Subcategorias</h3>
                                        <?php endif ?>
                                    </ul>
                                </li>
                            <?php endforeach ?>
                        <?php else: ?>
                            <h3>Sin categorias</h3>
                        <?php endif ?>
                        <li class="nav-item">
                            <a class="btn btn-outline btn-head me-2 dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                <ion-icon name="person-outline" class="mr-3 lead"></ion-icon>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if(session()->is_logged): ?>
                                    <li><a class="dropdown-item" href="#"> <?= esc(session()->name . " " . session()->lastname . " " . session()->surname ) ?> </a></li>
                                    <li><a class="dropdown-item" href="<?= base_url()?>/Auth/signout" > Logout </a></li>
                                <?php else: ?>
                                    <li><a class="dropdown-item" href="<?= base_url()?>/Auth/login" > Login </a></li>
                                    <li><a class="dropdown-item" href="<?= base_url()?>/Auth/signin" > Singin </a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>/Shoppingcart/index " class="btn btn-outline btn-head me-3 d-flex">
                                <ion-icon name="cart-outline" class="mr-3 lead fs-4"></ion-icon>
                                <span class="badge rounded-pill" style="background-color: #6C1528; color: white">0</span>
                            </a>
                        </li>
                    </ul>
                </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
        </nav>
    </header>