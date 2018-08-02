@extends('layouts.main')

@section('main')
<div class="right_col" role="main">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Nueva Correspondencia <small>Enviada</small></h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						<div class="row">
						<input type="hidden" name="codEnterprise">
							<div class="form-group col-xs-12 col-md-4">
								<label class="control-label">Tipo Correspondencia</label>
								<select class="select2_single form-control" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio">
									<option value="">Selecciona una Opción</option>
									<option>C. Entrada</option>
									<option>C. Salida</option>
								</select>
							</div>
						 </div>
						
						<div class="ln_solid"></div>
						
						<div class="row">

							<div class="form-group col-xs-12 col-md-4">
								<label class="control-label" for="first-name">Fecha de Envio</label>
								<div class=" xdisplay_inputx has-feedback">
									<input type="text" class="form-control single_cal4 has-feedback-left" name="sentDate" aria-describedby="inputSuccess2Status4" required="required" data-parsley-required-message="Este campo es obligatorio">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
									<span id="inputSuccess2Status4" class="sr-only">(success)</span>
								</div>
							</div>

							<div class="form-group col-xs-12 col-md-4">
								<label class="control-label" for="first-name">Fecha de Radicación</label>
								<div class=" xdisplay_inputx has-feedback">
									<input type="text" class="form-control single_cal4 has-feedback-left" id="" aria-describedby="inputSuccess2Status4" required name="receivedDate" data-parsley-required-message="Este campo es obligatorio">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
									<span id="inputSuccess2Status4" class="sr-only">(success)</span>
								</div>
							</div>
							<div class="form-group col-xs-12 col-md-4">
								<label class="control-label">Ciudad Origen</label>
								<select class="select2_single form-control" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio">
									<option>Escoje una Opción</option>
									@foreach( $city as $City)
									<option value="{{$City->idCity}}">{{$City->nameCity}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-xs-12 col-md-4">
								<label class="control-label">Cliente</label>
								<select disabled class="select2_single form-control" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio">
									<option value="">Aqui va el cliente</option>
								</select>
							</div>
							<div class="form-group  col-xs-12 col-md-4">
								<label class="control-label ">Remitente</label>
								<select class="select2_single form-control" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio">
									<option value="">Selecciona una area de trabajo</option>
									<option>Área de Trabajo 1</option>
								</select>
							</div>
						</div>
						<div class="row">
							
							<div class="form-group col-xs-12 col-md-4">
								<label class="control-label"><br></label>
								 <select class="select2_single form-control" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio">
									<option value="">Selecciona un usuario</option>
									<option>Usuario 1</option>
									<option>Usuario 2</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-md-4">
								<label class="control-label" for="last-name">Asunto</label>
								<input type="text" id="last-name" name="last-name" required="required" class="form-control" data-parsley-required-message="Este campo es obligatorio" >
							</div>
							<div class="form-group col-xs-12 col-md-4">
								<label class="control-label" for="first-name">Consecutivo</label>

								<div class="input-group date" id="myDatepicker3">
									<input type="text" class="form-control" required data-parsley-required-message="Este campo es obligatorio">
								</div>
							</div>
							<div class="form-group col-xs-12 col-md-4">

								<label class="control-label" for="first-name">Secuencia</label>
								<input type="text" name="country" id="autocomplete-custom-city" class="form-control" required="required" data-parsley-required-message="Este campo es obligatorio"/>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12">
								<label class="control-label" for="last-name">Observaciones</label>
								<textarea id="message"  class="form-control" name="message" ></textarea>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-4 col-xs-12">
								<label class="control-label">Formato</label>
								<select class="select2_single form-control" tabindex="-1"  required="required" data-parsley-required-message="Este campo es obligatorio">
									<option  value="">Selecciona un formato</option>
									<option>Cliente 1</option>
									<option>Cliente 2</option>
									<option>Cliente 3</option>
									<option>Cliente 4</option>
									<option>Cliente 5</option>
								</select>
							</div>
							<div class="form-group col-md-4 col-xs-12">
								<label class="control-label" for="last-name">Número de folios</label>
								<input type="text" id="last-name" name="last-name"  class="form-control col-md-7 col-xs-12">
							</div>
							<div class="form-group col-md-4 col-xs-12">
								<label class="control-label"> Entregada a archivo </label>
								<div class="checkbox col-xs-9 col-xs-offset-2">
									<input type="checkbox" class="flat" > 
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 col-xs-12">
								<label class="control-label" for="last-name">Empresa de mensajería</label>
								<input type="text" name="country" id="autocomplete-custom-messenger" required="required" class="form-control" data-parsley-required-message="Este campo es obligatorio">
							</div>
							<div class="form-group col-md-6 col-xs-12">
								<label class="control-label" for="last-name">Mensajero</label>
								<input type="text" id="last-name" name="last-name" required="required" class="form-control" data-parsley-required-message="Este campo es obligatorio">
							</div>
						</div>
						<div class="row">
							<div class="form-group text-left">
								<small class="col-sm-12 col-lg-12 "><sup>*</sup> Campos obligatorios</small>
							</div>
						</div>					
						<div class="ln_solid"></div>
						<div class="row">
							<div class="form-group col-xs-12 text-center">
							
								<button class="btn btn-primary" type="button">Cancelar</button>
								<button type="submit" class="btn btn-success">Guardar</button>
							
						</div>
						</div>
						

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection