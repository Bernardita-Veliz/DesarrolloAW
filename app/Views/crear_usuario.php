<?= $this->include('templates/header');?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tabla + Usuario</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html"></a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        <div>  
                                                
                    <div class="p-3 mb-2 bg-secondary bg-gradient fw-bold text-center">AGREGAR NUEVO USUARIO</div>
                    <form class="row g-3 needs-validation" action="<?php base_url('save') ?>" method="POST" novalidate>
                        <div class="col-md-4 position-relative">
                            <label for="nombre" class="form-label">Nombre Usuario</label>
                            <input type="text" class="form-control" id="" name="usuario" placeholder="ingrese nombre de usuario" required>
                           
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>


                        <div class="col-md-4 position-relative">
                            <label for="apellido" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="" name="password" placeholder="ingrese una contraseña" id="password"  required>
                          
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>                                             
                        <div class="col-md-3 position-relative">
                            
                            <p>Tipo de usuario</p>
                            <select class="form-select" id="tipo_usuario" name="tipo_usuario" required>
                                <option selected disabled value="">Seleccionar...</option>
                                <option>Administrador</option>
                                <option>Usuario</option>
                            </select>
                            
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>                   
                        <div class="row col-12 text-center">
                            <div class="card card-body table-responsive ">  
                                <div class="text-center">
                                    <button class="btn btn-success fw-bold" type="submit">Guardar</button>
                                    <a href="<?php echo base_url('/visualizar_usuarios'); ?>" class="btn btn-danger float-end" type="submit">Cancelar</a>
                                </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
  </div>
  <?= $this->include('templates/footer');?>
