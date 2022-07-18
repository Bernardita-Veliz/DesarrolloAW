<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inventario JB</title>
        <link href="<?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
        <script src="<?php echo base_url(); ?>/js/all.min.js"></script>
    </head>
    
    <body class="sb-nav-fixed">
        
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <h3 class="bg-dark text-white">Inventario JB</h3>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar" aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>

            <div class="btn-group">
                <button type="button" class="btn btn-info"><i class="fas fa-user fa-fw"></i></button>
              
                <button type="button" class="btn btn-info dropdown-toggle"
                        data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Desplegar menú</span>
                </button>
              
                <ul class="dropdown-menu bg-white" aria-labelledby="dropdownMenuButton>
                  <li><a href="#"><?php echo session('usuario'); ?></a></li>
                  <li><a href="<?php echo base_url('/salir'); ?>">Cerrar Sesión</a></li>

                </ul>
              </div>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        
                        <div class="nav"> 
                            <div class="sb-sidenav-menu-heading"></div>


                            <div class="dropdown p-3">
                            <li>
                                <a href="<?php echo base_url('/inicio'); ?>" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="40"><use xlink:href="#table"></use></svg>
                                    Inicio
                                </a>
                            </li>
                        </div>
                            <div class="dropdown p-3">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Usuarios
                                </button>
                                <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="<?php echo base_url('/visualizar_usuarios'); ?>">Ver Usuarios</a>
                                  <a class="dropdown-item" href="<?php echo base_url('/crear_usuario'); ?>">Agregar Usuarios</a>
                                </div>
                              </div>

                              <div class="dropdown p-3">
                                <p class="mt-4">Bodega Producto</p>
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Productos
                                </button>
                                <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo base_url('/categorias'); ?>">Categoria Productos</a>
                                  <a class="dropdown-item" href="<?php echo base_url('/bodega'); ?>">VerProductos</a>
                                  <a class="dropdown-item" href="<?php echo base_url('/agregar_producto'); ?>"">Agregar Productos</a>
                                </div>
                              </div>
                              <div class="dropdown p-3">
                                <p class="mt-4">Bodega Proyecto</p>
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Poyectos
                                </button>
                                <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="<?php echo base_url('/proyectos'); ?>"> Ver Proyectos</a>
                                  <a class="dropdown-item" href="<?php echo base_url('/agregar_proyecto'); ?>">Agregar Proyectos</a>
                                </div>
                              </div>



                            <div class="sb-sidenav-menu-heading"></div>
                            <div class="sb-sidenav-menu-heading"></div>

                            <div class="sb-sidenav-menu-heading">

                        </div></div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <a href="#" class="navbar-brand"><?php echo session('usuario'); ?></a>
                    </nav>

                    
                </nav>
            </div>