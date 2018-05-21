@extends('layouts.app')

@section('content')

<div class="limiter">
   <div class="container-login100">
      <div class="wrap-login100 p-t-65 p-b-10">
         <form class="login100-form validate-form" method="POST" action="{{ route('storeU')}}" novalidate>

            {{ csrf_field() }}
                
            <span class="login100-form-title p-b-45">
               Registro Usuario
            </span>
                    
            <div class="form-control">

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="userPerson" placeholder="Nombre" required>
                  </div>

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="password" name="password" placeholder="Contraseña" required>
                  </div>

                  <div class="container-login100-form-btn">
                     <button class="btn btn-warning">Guardar</button>
                  </div>

                  <div class="container-login100-form-btn">
                     <a href="{{ route('user.listU') }}" class="btn btn-danger">Cancelar</a>
                  </div>   
            </div>
         </form>
      </div>
   </div>
</div>

@endsection