<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include("links")
        <title> Automatizador - No Bugs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <style css>
            body {
                background-color: #191963 !important;
            }
            .container {
                margin-top: 80px;
            }
            .card {
                padding: 0 30px 30px 30px !important;
                width: fit-content !important;
                max-width: 80% !important;
            }
        </style>
    </head>
    <body>
        <div class="ui center aligned container">
            <img src=" {{ URL::asset("img/header_branco.png") }} " width="50%"/>
            <div class="ui centered card">
                <div class="center aligned content">
                    <p class="header"> Login </p>
                </div>
                <form action="/">
                    <div class="ui grid fluid content">
                        <div class="ui input focus row">
                            <input placeholder="Usuário/email"/>
                        </div>     
                        <div class="ui input focus row">
                                <input placeholder="Senha"/>
                        </div>     
                        <button type="submit" class="ui button primary">Conectar</button>   
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
