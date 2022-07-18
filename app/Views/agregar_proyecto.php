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
                <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded mb-md-4 mt-md-4 pb-5">                                    
                    <div class="p-3 mb-2 bg-secondary bg-gradient fw-bold text-center">AGREGAR PROYECTO</div>
                    <form class="row g-3 needs-validation text-center" action="<?php base_url('save_product') ?>" method="POST" novalidate>
                        <div class="col-md-8 position-relative">
                            <label for="" class="form-label">Nombre Cliente</label>
                            <input type="text" class="form-control text-center" name="nombre" id="" placeholder="ingrese nombre del producto" id="" required>
                           
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>

                        <div class="col-md-8 position-relative">
                            <label for="" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="" name="descripcion"placeholder="ingrese una descripción del producto" id=""  required>
                          
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>  
                        <div class="col-md-8 position-relative" name="Seleccionar">
                        <label for="" class="form-label">Materiales</label>
                        <input type="text" class="form-control" id="" name="descripcion"placeholder="ingrese una descripción del producto" id=""  required>

                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Elegir correctamente</div>   

                        </div> 
                        <div class="row col-12 text-center">
                            <div class="card card-body table-responsive ">  
                                <div class="text-center">
                                <button class="btn btn-success fw-bold" type="submit">Guardar</button>
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