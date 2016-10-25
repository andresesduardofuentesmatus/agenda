@extends('app')

@section('htmlheader_title')
    Inicio
@endsection

@section('contentheader_title')
  Calendario de citaciones
@endsection


@section('main-content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">Horas agendadas</div>

				<div class="panel-body">          
          <input type="hidden" id="fechaActual" value="{{ $fecha }}">
					<div id="calendar">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
