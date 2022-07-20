<?= $this->include('templates/header');?>
<link rel="stylesheet" href="css/estilos.css">
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tabla materiales</h1>
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
<div></div>
      
  </div>
</div>
<div class="card card-body table-responsive ">  
      <div class="text-center">
        <a href="<?php echo base_url('/proyectos'); ?>" type="button" class="btn btn-primary">VOLVER</a></div> 
    
      </div> 
    <div class="container">
      <div class="card">
      <img src="assets/img/m1.jpg">
      <h4>Materiales de Construcción</h4>
      <a href="?>">Leer Más</a>
    </div>
    <div class="card">
      <img src="assets/img/m2.jpg">
      <h4>Ferretería</h4>
      <a href="?>">Leer Más</a>
    </div>
    <div class="card">
      <img src="assets/img/m3.jpg">
      <h4>Electricidad y Seguridad</h4>
      <a href="#">Leer Más</a>
    </div>
    <div class="card">
      <img src="assets/img/m4.jpg">
      <h4>Pinturas</h4>
      <a href="#">Leer Más</a>
    </div>
    <div class="card">
      <img src="assets/img/m5.jpg">
      <h4>Organización y limpieza</h4>
      <a href="#">Leer Más</a>
    </div>
    <div class="card">
      <img src="assets/img/m6.jpg">
      <h4>Gasfintería</h4>
      <a href="#">Leer Más</a>
    </div>

    </div>
    
     

</div>
</body>
<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>

<script>
    $('#modal-confirma').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });

    $(document).ready(function() {
        if (!$.fn.DataTable.isDataTable('#dataTable')) {
            $('#dataTable').DataTable({
                "language": {
                    "url": "/assets/DatatablesSpanish.json"
                },
                "order": []
            });
        }

        $("body").tooltip({
            selector: '[rel=tooltip]'
        });
    });
</script>


<?= $this->include('templates/footer');?>
