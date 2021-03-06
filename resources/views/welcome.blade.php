<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

            .margin {
                margin-top: 30px;
            }
        </style>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        {{-- Navbar --}}
        {{-- END navbar --}}

        {{-- Content --}}
        <div class="container">
            <div class="row margin">
                <div class="col-md-offset-2 col-md-8">
                    @if (Session::has('class') && Session::has('message'))
                        <div class="{{ Session::get('class') }}">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>
                                Mensen met een handicap hebben veel extra uitgaven en verbruiken. <br>
                                Enkele vormen van ondersteuning, zoals bijvoorbeeld sociale tarieven voor nutsvoorzieningen en de erkenning voor het omnio-statuut,
                                zijn echter gekoppeld aan de tegemoetkoming voor personen met een handicap.
                            </p>
                            <p>
                                Deze worden berekend op basis van het 'bruto gezamenlijk belastbaar inkomen' te vinden op het aanslagbiljet voor de personenbelasting van 2 jaar terug.
                            </p>
                            <p>
                                Het maximaal toegelaten inkomen ligt bovendien veel hoger voor een werkende invalide dan voor een niet-werkende invalide.
                                Wij willen met de petitie een krachtig burgerinitiatief starten, zodat het federaal parlement ons voorstel op de agenda zet waarbij wij die
                                ondersteuning voor een gehandicapte los willen koppelen van de uitbetaling van de tegemoetkoming.
                                Bovendien vragen wij dat men zich voor die uitbetaling baseert op de <strong>HUIDIGE</strong> financiële situatie van de gehandicapte en niet op deze van 2 jaar eerder.
                            </p>
                            <p>
                                Daarom willen we minstens <strong>100.000 handtekeningen</strong> verzamelen van Belgische stemgerechtigden, voorzien zijn van uw naam, woonplaats, geboortedatum en email.
                            </p>
                            <p>
                                Alvast bij voorbaat dank!!
                            </p>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Petitie tekenen:

                            <div class="pull-right">
                                {{ $signatures }}/<strong>100.000 Handtekeningen</strong>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{ route('signature.insert') }}" method="POST">
                                {{-- CSRF TOKEN --}}
                                {{ csrf_field() }}

                                <div class="form-group {{ $errors->has('naam') ? 'has-error' : '' }}">
                                    <div class="col-md-4">
                                        <input type="text" name="name" class="form-control" placeholder="Uw naam">

                                        @if($errors->has('naam'))
                                            <span class="help-block">{{ $errors->first('naam') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('geboortedatum') ? 'has-error' : '' }}">
                                    <div class="col-md-4">
                                        <input type="text" name="birth_date" class="form-control" placeholder="Uw geboortedatum">

                                        @if($errors->has('geboortedatum'))
                                            <span class="help-block">{{ $errors->first('geboortedatum') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <div class="col-md-6">
                                        <input type="text" name="email" class="form-control" placeholder="Uw email adres">

                                        @if($errors->has('email'))
                                            <span class="help-block">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('stad') ? 'has-error' : '' }}">
                                    <div class="col-md-6">
                                        <input type="text" name="city" class="form-control" placeholder="Uw stad">

                                        @if($errors->has('stad'))
                                            <span class="help-block">{{ $errors->first('stad') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-sm btn-success">Insturen</button>
                                <button type="reset" class="btn btn-sm btn-danger">Reset</button>

                                <span class="pull-right">
                                    <a href="{{ route('disclaimer') }}" class="btn btn-sm btn-default">Disclaimer</a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- /Content --}}
    </body>
</html>
