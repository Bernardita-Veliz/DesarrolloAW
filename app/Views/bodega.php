<?= $this->include('templates/header');?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tabla Bodega Producto</h1>
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

     
      <table class="table table-bordered table-striped table-sm display" id="dataTable" width="100%" cellspacing="0">       
        <h4 class="p-3 bg-secondary bg-gradient fw-bold text-center"> PRODUCTOS EN BODEGA</h4>
        <tr>
          <th>ID_PRODUCTO</th>
          <th>NOMBRE</th>
          <th>CÓDIGO</th>
          <th>DESCRIPCION</th>
          <th>CANTIDAD</th>
          <th>CATEGORIA</th>

        </tr>
        <?php foreach($datos as $key): ?>
          <tr>
          <th><?php echo $key->id_producto ?></th>
          <th><?php echo $key->nombre_producto ?></th>
          <th><?php echo $key->codigo ?></th>
          <th><?php echo $key->descripcion ?></th>
          <th><?php echo $key->cantidad ?></th>
          <th><?php echo $key->nombre_categorias ?></th>
          <th>          <th><a href="<?php echo base_url();?>home/editar?id=<?php echo $key->id_producto ?>" class="btn btn-warning">EDITAR</a></th></th>
          <td>
          <a href="<?php echo base_url('/editar_producto');?>home/editar?id=<?= $key->id_producto;?>" type="button" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
          </td>
          <td>
            <a href="<?= base_url() ?>/eliminar/<?= $key->id_producto;?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
          </td>
          <td>

        </tr>

        <?php endforeach; ?>
      </table>

    </div>
  </main>  
        </div>
    </div>
  </div>
  <?= $this->include('templates/footer');?>