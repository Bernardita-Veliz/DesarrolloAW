<?= $this->include('templates/header');?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tabla Usuarios</h1>
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
  
  <div class="text-center" style="min-height: 3rem;">
    <hr class="mt-0 mb-2" />
          
  </div>
</div>
<div class="dataTables_length" id="dataTable_length"><label>Mostrar <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> registros</label></div>

        <div class="card card-body table-responsive ">
          
        <table class="table table-bordered table-striped table-sm display" id="dataTable" width="100%" cellspacing="0">       
        <h4 class="p-3 bg-secondary bg-gradient fw-bold text-center"> Usuarios dentro del sistema</h4>
        
        <tr>
          <th>ID_USUARIO</th>
          <th>NOMBRE USUARIO</th>
          <th>TIPO DE USUARIO</th>
          <th></th>
          <th></th>

        </tr>
        <?php foreach($datosusuario as $key): ?>
          <tr>
          <th><?php echo $key->id_usuario ?></th>
          <th><?php echo $key->usuario?></th>
          <th><?php echo $key->tipo_usuario?></th>

          <th><a  href="<?=base_url('Home/editarusuario/'.$key->id_usuario)?>" type="button" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a></th>
          <th><a  href="<?= base_url() ?>/eliminar_usuarios/<?= $key->id_usuario;?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a></th>

        </tr>
        </div>
        <?php endforeach; ?>
      </table>

    </div>
        </div>
        
    </div>

  </div>
    </div>
  </div>










  

<?= $this->include('templates/footer');?>