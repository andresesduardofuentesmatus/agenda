<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agenda Electronica</title>
    @include('partials.htmlheader')
    <style media="screen">
      div[class^="col-md"]{
        background: #FFF;
      }
    </style>
  </head>
  <body>

    <div class="container">

      <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <div class="center-block">
              <img src="img/diente.png" alt="" style="width:200px;" class="center-block" />
            </div>
          </div>
      </div>

      <div class="row">
          <div class="col-md-6 text-right">
            <a href="auth/register">Registrarme</a>
          </div>
          <div class="col-md-6 text-left">
            <a href="auth/login">Entrar</a>
          </div>
      </div>

    </div>


  </body>
  @include('partials.scripts')
</html>
