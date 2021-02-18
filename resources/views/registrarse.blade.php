<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/estilos.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>

  <body class="bg-dark">
   

    

    <main class="container pb-5 ">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5 pt-3">
          <div class="card card-signin my-5">
            <div class="card-body mb-3">
              <h5 class="card-title text-center pt-4">Registro</h5>
             


              <form class="form-signin" action="registrarUsuario">
                <div class="form-label-group">
                  <input type="text" id="nombreRegistro" class="form-control mb-4 mt-4" placeholder="Nombre">
                  <input type="email" id="emailRegistro" class="form-control mb-4 mt-4"
                    placeholder="Correo Electronico">
                  
                </div>

                <div class="form-label-group">
                  <input type="password" id="contraseñaRegistro" class="form-control" placeholder="Contraseña">

                </div>
             
               <strong>Seleccione tipo de usuario :</strong>
                <select name="type">
                    <option>Developer</option>
                    <option>User</option>
                </select>

                <button >Registrar</button>


              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

  


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"></script>

    <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-auth.js"></script>
    <script src="js/firebaseconfig.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <script src="js/app.js"></script>

  </body>

</html>