<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body{
            background-color: #F0FFFF;
            font-family: 'Roboto', sans-serif;
        }
        .bg-light {
            background-color: #ffff !important;
        }

        a {
            font-family: 'Roboto', sans-serif;
        }

        #sidebar-container {
            min-height: 100vh;
            /* margin-left: -18rem; */
            transition: margin .25s ease-in-out;
        }

        #sidebar-container .logo {
            padding: .874rem 1.25rem;
            font-size: 1.2rem;
            font-family: 'Oooh Baby', cursive;
        }

        #sidebar-container .menu {
            width: 18rem;
        }

        #content-wrapper.toggled #sidebar-container {
            margin-left: 0;
        }

        @media(min-width: 768px) {
            #sidebar-container {
                margin-left: 0;
            }

            #page-container {
                min-width: 0;
                width: 100%;
            }

            #content-wrapper.toggled #sidebar-container {
                margin-left: -18rem;
            }
        }
    </style>
</head>

<body>
    <div id="content-wrapper" class="d-flex">
        <div id="sidebar-container" class="bg-light border-right">
            <div class="logo">
                <figure style="height: 3rem">
                    <img src="/assets/logos/Astoria_black.png" alt="Astoria-Logo" style="height: 100%">
                </figure>
            </div>
            <div class="menu list-group-flush">
                <a href="<?=base_url('admin/index');?>" class=" list-group-item list-group-item-action bg-light p-3 border-0">
                    <i class="icon ion-ios-home lead mr-2">
                    </i>Inicio</a>
                <a href="<?=base_url('admin/usuarios'); ?>" class=" list-group-item list-group-item-action bg-light p-3 border-0">
                    <i class="lead mr-2 icon ion-md-contacts">
                    </i>Usuarios</a>
                <a href="<?=base_url('admin/Productos');?>" class=" list-group-item list-group-item-action bg-light p-3 border-0">
                    <i class="lead mr-2 icon ion-ios-wine">
                    </i>Productos</a>
                <a href="<?=base_url('admin/historial');?>" class=" list-group-item list-group-item-action bg-light p-3 border-0">
                    <i class="lead mr-2 icon ion-md-filing">
                    </i>Historial</a>
                <a href="<?=base_url('admin/add');?>" class=" list-group-item list-group-item-action bg-light p-3 border-0">
                <i class="icon ion-md-add-circle mr-2 lead">
                    </i>Add Admin</a>
                <a href="#" class=" list-group-item list-group-item-action bg-light p-3 border-0 disabled">
                    <i class="lead mr-2 icon ion-md-person">
                    </i>Mi perfil</a>
                <a href="#" class=" list-group-item list-group-item-action bg-light p-3 border-0 disabled">
                    <i class="lead mr-2 icon ion-md-cog">
                    </i>Configuración
                </a>
            </div>
        </div>
        <div id="page-container" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container">
                    <button id="menu-toggle" class="btn btn-outline-info"><i class="icon ion-md-list justify-content-center"></i></button>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item dropdown ml-lg-auto">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon ion-md-planet"></i> Admin User
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Mi Perfil</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('Auth/signout'); ?>">Cerrar Sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        

    
