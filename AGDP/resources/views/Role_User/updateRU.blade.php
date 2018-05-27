@extends('layouts.app')

@section('content')

<div class="limiter">
   <div class="container-login100">
      <div class="wrap-login100 p-t-65 p-b-10">
         <form class="login100-form validate-form" method="PUT" action="{{ route('updateRU, [$userole->nRU]) }}">
          {{ csrf_field() }}
                
            <span class="login100-form-title p-b-45">
               Asociación Rol-Usuario
            </span>
                    
            <div class="form-control">

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="nRU" value="{{ $userole->nRU }}" disabled>
                  </div>

                  <div class="form-group">
                   <p> Usuario </p>
                      <select class="wrap-input100 m-t-6" name="idUser">
                        @foreach ($user as $User)
                          <option value="{{$User->idUser}}">{{$User->namePerson}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                   <p> Rol de Usuario </p>
                      <select class="wrap-input100 m-t-6" name="idRole">
                        @foreach ($role as $Role)
                          <option value="{{$Role->idRole}}">{{$Role->nameRole}}</option>
                        @endforeach
                      </select>
                  </div>
            </div>
            <div class="container-login100-form-btn">
               <button class="btn btn-warning">Guardar</button><br>
            </div>
               <div class="card-footer text-muted">
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

@endsection