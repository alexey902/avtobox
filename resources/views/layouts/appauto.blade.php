<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="нижнекамск автозапчасти дешево автобокс заказ рулевая рейка">
    <meta name="author" content="нижнекамск автозапчасти">

    <link rel="icon" href="{{ asset('favicon_16.ico') }}">
    <meta name='wmail-verification' content='01f8585478bcf13b645fccb1ddf3688b'/>
    <meta name="google-site-verification" content="ps-IzpPoW46eKEthmkisAIqJC6Hg1nobHDaUnAmdmsk"/>
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



<div class="container-fluid" id="app">
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
var uluru = {lat: 55.644288, lng: 51.804878};
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 17,
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
'<p>Адрес: г.Нижнекамск, ТЦ Ювэна, проспект Мира 63Б</p>'+
'</div>'+
'</div>';

var infowindow = new google.maps.InfoWindow({
content: contentString
});
var image ="{{asset('images/yellow_labell.png')}}";
var marker = new google.maps.Marker({
position: uluru,
map: map,
title:'Магазин Автобокс',
label:'Магазин Автобокс',
icon: image
});
marker.addListener('click', function() {
infowindow.open(map, marker);
});
//setMarkers(map);
}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaLgb1teJ3OGXASnl7FxXEae8AJCSpixQ&callback=initMap"></script>

<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=46891059&amp;from=informer"
   target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/46891059/1_0_EFEFEFFF_EFEFEFFF_0_uniques"
                                       style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (уникальные посетители)" class="ym-advanced-informer" data-cid="46891059" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46891059 = new Ya.Metrika({
                    id:46891059,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46891059" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>

