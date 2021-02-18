<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 

    <title></title>
</head>
<body>
<main class="container-fluid bg-dark pt-5 pb-5">


    <div class="container pt-4 pb-5">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5 ">
            <div class="card-body pb-0">
              <h5 class="card-title text-center pb-3">Ingresa a tu cuenta</h5>
              <form class="form-signin" action="initSession">
                <div class="form-label-group pb-3">
                 
                  <input type="email" name="email" id="email " class="form-control " placeholder="Correo Electronico" required
                    autofocus>

                </div>

                <div class="form-label-group pb-3">
                  <input type="password" name="password" id="password " class="form-control" placeholder="Contraseña" required>

                </div>

                <strong>Seleccione tipo de usuario :</strong>
                <select name="type">
                    <option>Developer</option>
                    <option>User</option>
                </select>

               
                <button class="btn btn-lg  btn-block text-uppercase mt-4 boton-logueo ancla-botones-de-login " type="submit">Iniciar
                  Sesion</button>
                  
                  
                
                  <hr class="my-4">
               
              </form>
 
              </div>
              <div class="container ">
                <p class=" text-center">No tienes una cuenta?</p>
                <button class="btn btn-lg btn-block btn-registrar mb-5"> <a class="ancla-botones-de-login" href="registrarse">Registrese Aqui</a> </button>  
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>



  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>
</html>
