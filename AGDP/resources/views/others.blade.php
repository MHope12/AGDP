@extends('layouts.main')

@section('content')
<div class="container">
   <div class="wrapper-dashboard">
      <form method="POST">
         <div class="container text-center">
         	<div class="row content-card justify-content-md-center">
               <div class="col-sm-4 text-center border-primary">
                  <div class="card border-primary" style="width: 18rem;">
                     <div class="card-body text-primary">
                        <h5 class="card-title">Cargo</h5>
                        <buton href="{{route('typePerson')}}" class=" btn btn-link">Ver</buton>
                     </div>
                  </div>
               </div>

         		<div class="col-sm-4 text-center border-primary">
         			<div class="card border-primary" style="width: 18rem;">
         				<div class="card-body text-primary">
         					<h5 class="card-title">Formato Documento</h5>
                        <button href="{{route('storagew')}}" class="btn btn-link">Ver</button>
         				</div>
         			</div>
         		</div>
         	</div>

         	<div class="row content-card  justify-content-md-center">
               <div class="col-sm-4 text-center border-primary">
                  <div class="card border-primary" style="width: 18rem;">
                     <div class="card-body text-primary">
                        <h5 class="card-title">Roles del Sistema</h5>
                        <button href="{{ route('role')}}" class="btn btn-link">Ver</button>
                     </div>
                  </div>
               </div>
         		<div class="col-sm-4 text-center border-primary">
         			<div class="card border-primary" style="width: 18rem;">
         				<div class="card-body text-primary">
         					<h5 class="card-title">Permisos del Sistema</h5>
                        <button href="{{ route('permission')}}" class="btn btn-link">Ver</button>
         				</div>
         			</div>
         		</div>
         	</div>
         </div>
      </form>
   </div>
</div>
@endsection