<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="нижнекамск автозапчасти дешево автобокс под заказ">
    <meta name="author" content="нижнекамск автозапчасти">

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Styles -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Avtobox') }}</title>
    <!--[if IE]>
    <script type='text/javascript' src="{{ asset('js/html5shiv.js') }}"></script>

    <script type='text/javascript' src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->




</head>
<body>



<div id="app">

    @yield('acontent')
</div>

<!-- Scripts -->

{{--<script type='text/javascript' src="{{ asset('js/jQuery1_11_2.js') }}"></script>--}}
{{--<script>window.jQuery || document.write('<script src="{{ asset('js/jQuery1_11_2.js') }}"><\/script>')</script>--}}

<script src="{{ asset('js/app.js') }}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
<script>
function initMap() {
var uluru = {lat: 55.644247, lng: 51.804897};
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 15,
center: uluru
});

var contentString = '<div id="content">'+
'<div id="siteNotice">'+
'</div>'+
'<h1 id="firstHeading" class="firstHeading">Магазин Автобокс</h1>'+
'<div id="bodyContent">'+
'<p><b>Магазин Автобокс.</b> Мы занимаемся продажей и подбором ' +
'автозапчастей, жидкостей, и аксессуаров для авто. '+
'Наши клиенты получают самые выгодные цены в городе'+
'</p>'+
'<p>Адрес: г.Нижнекамск, ТЦ Ювэна, ул.Мира 61Б</p>'+
'</div>'+
'</div>';

var infowindow = new google.maps.InfoWindow({
content: contentString
});
var iconurl={url:'{{ asset('images/thumbs/sedan_infowindow.png') }}',
size: new google.maps.Size(55, 65),
origin: new google.maps.Point(0,0),
anchor: new google.maps.Point(0, 0)

};


var marker = new google.maps.Marker({
position: uluru,
map: map,
title:'Магазин Автобокс',
label:'Магазин Автобокс',
icon: iconurl
});
marker.addListener('click', function() {
infowindow.open(map, marker);
});
//setMarkers(map);
}
</script>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaLgb1teJ3OGXASnl7FxXEae8AJCSpixQ&callback=initMap">
</script>
</body>
</html>

