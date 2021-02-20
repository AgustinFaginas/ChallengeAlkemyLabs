@extends('layout') 

@section('content')

<a href="{{route('endSession')}}">CERRAR SESION</a>

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
 

@endsection