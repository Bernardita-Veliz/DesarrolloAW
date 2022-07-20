<?= $this->include('templates/header');?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tabla + proyecto</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html"></a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>

            
<div
  id="sidenav-3"
  data-mdb-close-on-esc="false"
  class="sidenav"
  data-mdb-hidden="false"
  data-mdb-position="absolute"
  data-mdb-focus-trap="false"
  data-mdb-scroll-container="#scroll-container"
  role="navigation"
>

  <div class="text-center">
    <h3 class="py-4"><i class="fa-solid fa-screwdriver-wrench"></i></h3>
    <hr class="m-0" />
  </div>            
  <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">    
    <?php  if(session('mensaje')) { ?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Error!</strong> <?php session('mensaje'); ?>
<button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
</div>
 <?php  } ?>                                
                    <div class="p-3 mb-2 bg-secondary bg-gradient fw-bold text-center">AGREGAR PROYECTO</div>
                    <form class="row g-3 needs-validation" action="<?php base_url('save') ?>" method="POST" novalidate>
                    <div class="col-md-8 position-relative">
                            <label for="nombre_proyecto" class="form-label">Nombre proyecto</label>
                            <input type="text" class="form-control text-center" name="nombre_proyecto" id="nombre_proyecto" placeholder="ingrese nombre del proyecto" id="" required>
                           
                            <div class="valid-tooltip">¡Perfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>
                        <div class="col-md-3 position-relative">
                            <label for="codigo" class="form-label">Codigo</label>
                            <input type="number" class="form-control" id="codigo" min="0" name="codigo"placeholder="ingrese una descripción del proyecto" id=""  required>
                          
                            <div class="valid-tooltip">¡Perfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>  

                        <div class="col-md-8 position-relative">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion"placeholder="ingrese una descripción del proyecto" id=""  required>
                          
                            <div class="valid-tooltip">¡Perfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>  
                        <div class="col-md-4 position-relative">
                        <p>Materiales</p>
                        
                            <select class="form-select" id="nombre_material" name="nombre_material"  required>
                                <option selected disabled value="">Seleccionar...</option>
                                <option>Materiales de Construcción</option>
                                <option>Ferretería</option>
                                <option>Electricidad y Seguridad</option>
                                <option>Pinturas</option>
                                <option>Organización y limpieza</option>
                                <option>Gasfintería</option>
                            </select>
                            </div>   
                              
                        <div class="col-md-4 position-relative">
                            <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                            <div class="col_one_third col_last c-azul">
                                    <input type="date" id="fecha_inicio"  name="fecha_inicio"  class="sm-form-control">
                                </div>
                            <div class="valid-tooltip">¡Perfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>       
                        <div class="col-md-4 position-relative">
                            <label for="fecha_final" class="form-label">Fecha Termino</label>
                            <div class="col_one_third col_last c-azul">
                                    <input type="date" id="fecha_final"  name="fecha_final"  class="sm-form-control">
                                </div>
                            <div class="valid-tooltip">¡Perfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>   
                        <div class="row col-12 text-center">
                            <div class="card card-body table-responsive ">  
                                <div class="text-center">
                                    <button class="btn btn-success fw-bold " type="submit">Guardar</button>
                                    <a href="<?php echo base_url('/proyectos'); ?>" class="btn btn-danger float-end" type="submit">Cancelar</a>
                                </div> 
                            </div>
                        </div>  
                    </form>  
                </div>
            </div>      
        </div>
    </div>

    </div>


    <?= $this->include('templates/footer');?>