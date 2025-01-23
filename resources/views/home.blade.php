@extends('layouts.app')

@section('content')
    <?php $f=1; $style='/css/home.css';?>
    <div class="container">
    <img src="img/unnamed.ico">
    <h1>Ангарский политехнический техникум</h1>
    </div>
    <div class="con2">
            <div class="info"><h2>Адрес</h2>
                <br>665830, Иркутская область, Ангарск, 52 квартал, дом 1
            </div>
            <div class="info"><h2>Как доехать:</h2>
                <br>На маршрутах: 2,3,7,10,11,28
            </div>
            <div class="info"><h2>Новости</h2>
                <br>1. Открылась Столовая
                <br>2. Новое руководство
                <br>3. 1-ого октября открывается гардероб
            </div>
    </div>
@endsection
