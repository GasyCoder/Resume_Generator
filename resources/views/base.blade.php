<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Emploi Mahajanga - Générateur de CV</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> -->

       
        <link href="{{ asset('css/datepicker.css') }}" rel="stylesheet" type="text/css"/>  

        <link href="{{ asset('css/ecv.css') }}" rel="stylesheet" type="text/css" /> 

        <style>
            .main {
                width: 960px;
                margin: 0 auto;
            }
        </style>
    </head>

    <body>

     <div class="container main">

            <div class="row">

                <div class="col-lg-12 offset-sm-2">
                    <h1 class="display-3">Générateur de CV</h1>
                <div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (Session('success'))
                        <div class="alert alert-success">
                            {{ Session('success') }}
                        </div>
                    @endif
                </div>
            </div>

            @yield('main')
    </div>
       
       

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> -->
        @yield('customScript')

    </body>
</html>
