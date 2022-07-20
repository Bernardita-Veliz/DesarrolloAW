<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    


  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-4">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-4 mt-md-4 pb-5">
            <form action="<?php echo base_url('/login')?><?php base_url('login_usuario') ?>" method="POST" class="needs-validation" novalidate>              
            <h2 class="fw-bold mb-2 text-uppercase">Inicio De Sesión</h2>
              <p class="text-white-50 mb-5">Inicie sesión con usuario y contraseña</p>

              <div class="form-outline form-white mb-4">
              <input type="text" name="usuario" class="form-control text-center" required="" placeholder="Ingrese usuario">
                <label for="usuario">Usuario</label>
                <div class="invalid-feedback p-4">
                    Por favor ingrese nombre de usuario.
                </div>
              </div>

              <div class="form-outline form-white mb-4">
              <input type="password" name="password" class="form-control text-center" required="" placeholder="Ingrese contraseña">
                <label for="password">Contraseña</label>
                <div class="invalid-feedback p-4">
                    Por favor ingrese contraseña.
                </div>
              </div>

              <button class="btn btn-outline-info btn-lg px-5">Entrar</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
            </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>




<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

<script type="text/javascript">
  let mensaje = '<?php echo $mensaje ?>';
  if(mensaje == '1'){
    swal(':D','Accedió correctamente','success');
  }else if(mensaje == '0'){
    swal(':c','Ocurrió un error vuelva a intentarlo.','error');
  }
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url(); ?>/js/functions.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/public/assets/js/sweetAlets.js"></script>
  </body>
</html>