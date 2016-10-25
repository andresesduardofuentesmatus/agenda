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
          <input type="hidden" id="fechaActual2" value="{{ $fecha2 }}">

          <div id="calendar">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection
