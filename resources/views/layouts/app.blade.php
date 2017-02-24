<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Login')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/vendor/trumbowyg/ui/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/vendor/jqueryfilter/jquery.filer.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/vendor/jqueryfilter/jquery.filer-dragdropbox-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/dist/panel.min.css') }}">

            
    <style>
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    
    

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ asset('asset/js/vendor/trumbowyg.min.js') }}"></script>
    <script src="{{ asset('asset/js/vendor/jquery.filer.min.js') }}"></script>
    <script>
        $('.trumbowyg-demo').trumbowyg({
            svgPath : '/asset/css/vendor/trumbowyg/ui/icons.svg',
            lang: 'es',
            btns: [['bold'],
                    'btnGrp-lists',]
        });
        $('div.alert').not('.alert-important').delay(3000).slideUp(350);

            $('#image').filer({
                extensions: ["jpg", "png", "gif"],
                limit: 1,
                showThumbs: true,
                captions:{
                    button: "Buscar imagen",
                     feedback: "Buscar imagen del producto",
                     feedback2: "Imagen"
                }
            });       

    </script>

</body>
</html>
