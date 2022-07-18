<?= $this->include('templates/header');?>
<div class="col-9 row bg-white justify-content-center align-items-center vh-100">
<div class="container">
        <div class="row">
            <div class="col">             
            
                <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">                                    
                    <div class="p-3 mb-2 bg-secondary bg-gradient fw-bold text-center">EDITAR PRODUCTOS</div>
                    <form class="row g-3 needs-validation" action="<?=site_url('/actualizar')?>" method="POST" novalidate>
                        <div class="col-md-8 position-relative">
                        <input type="hidden" name="id" value="">
                        </div>
                        <div class="col-md-8 position-relative">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="" placeholder="ingrese nombre del producto" 
                            value=""  required>
                           
                        </div>

                        <div class="col-md-3 position-relative">
                            <label for="codigo" class="form-label"></label>
                            <input type="text" class="form-control" id="" name="codigo"placeholder="ingrese el código del producto" 
                            value=""  required>
                          
                        </div>  

                        <div class="col-md-8 position-relative">
                            <label for="" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="" name="descripcion"placeholder="ingrese una descripción del producto" 
                            value=""  required>
                          

                        </div>                                             
                        <div class="col-md-3 position-relative">
                            <label for="" class="form-label">Cantidad</label>
                            <input type="number" min="0" name="cantidad" class="form-control" placeholder="ingrese cantidad del producto" 
                            value="" required>

                            
                        </div>                   
                        <div class="col-12">
                        <button class="btn btn-warning fw-bold " type="submit">Guardar</button>
                        <a href="<?php echo base_url('/visualizar_usuarios'); ?>"class="btn btn-danger fw-bold float-end" type="submit">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

<?= $this->include('templates/footer');?>