<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='UTF-8'>
    <title>Metalurgica JV Ltda.</title>
    <meta content='Acumuladores de aire' name='description'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="{{ asset('asset/frontend/css/main.css') }}" rel='stylesheet'>
  </head>
  <body>
  
    <!--[if lt IE 9]>
    <p class='browserupgrade'>
      Estás usando un navegador
      <strong>desactualizado.</strong>
      Por favor
      <a href='http://browsehappry.com/'></a>
      actualiza tu navegador
      para una mejor experiencia
    </p>
    <![endif]-->

  @yield('content')

    <script src="https://use.fontawesome.com/766de543e6.js"></script>
    <script src="{{ asset('asset/frontend/js/vendor/jquery-1.12.2.min.js') }}"></script>
    <script src="{{ asset('asset/frontend/js/vendor/materialize.min.js') }}"></script>
    <script src="{{ asset('asset/frontend/js/vendor/smooth.js') }}"></script>
    <script src="{{ asset('asset/frontend/js/dist/main.js') }}"></script>
    <script>$(".button-collapse").sideNav();</script>
  </body>
</html>