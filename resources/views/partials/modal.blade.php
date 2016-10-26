<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">@yield('modal-title')</h4>
      </div>
      <div class="modal-body">
        @yield('modal-body')
      </div>
      <div class="modal-footer">
        <button id="btnCerrarModal" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
  $('#btnCerrarModal').on('click',function(){

    setTimeout(function(){
     $('#myModal').remove();
   }, 300);


    // $('#incluir-modal').html('');
    // $('.modal-backdrop.fade.in').remove();

  });
</script>
