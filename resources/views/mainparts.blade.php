@extends('layouts.appauto')

@section('acontent')
    {{--<div class="container-fluid">--}}


        {{--<h1>{{$message}}</h1>--}}
    {{--</div>--}}

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse collapseie8">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

            </div><!--/.nav-collapse -->
        </div>
    </nav>


    {{-- Top picture--}}
<div class="jumbotron">
    <div class="container-fluid">
        <h1>Мы делаем цены ниже</h1>
        <p class="description">Автозапчасти под заказ. Доставка от 1 дня. Гарантия</p>
        <p class="forbtn"> <a class="btn btn-primary btn-lg" role="button" href="{{url('request_form')}}">Оставить заявку &raquo;</a></p>

    </div>

</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container-fluid marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('images/thumbs/svecha_140.jpg') }}" alt="Generic placeholder image">
            <h2>Свечи зажигания</h2>
            <p>Большой выбор поставщиков свечей зажигания на любое транспортное средство. Наши специалисты в короткие сроки помогут разобраться в ассортименте и подобрать наилучший вариант</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('images/thumbs/bochka_nefti_140.jpg') }}" alt="Generic placeholder image">
            <h2>Автомасла</h2>
            <p>Высококачественные оригинальные масла </p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('images/thumbs/stojka_stabilizatora_140.jpg') }}" alt="Generic placeholder image">
            <h2>Элементы подвески</h2>
            <p>Большой выбор производителей автозапчастей отличаются как по цене так и по качеству. Имея за плечами большой опыт подбора комплектующих, мы поможем вам не переплатить и получить качественный товар</p>
        </div><!-- /.col-lg-4 -->
        <div class="row">
            <div class="col-lg-4">
                <p><a class="btn btn-default" href="#" role="button">Сделать запрос</a></p>

            </div>
            <div class="col-lg-4">
                <p><a class="btn btn-default" href="#" role="button">Сделать запрос</a></p>

            </div>
            <div class="col-lg-4">
                <p><a class="btn btn-default" href="#" role="button">Сделать запрос</a></p>

            </div>

        </div>
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">



    <!-- /END THE FEATURETTES -->
<!--Google Maps      -->
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Наверх страницы</a></p>
        <p>Наш адрес: г. Нижнекамск, ТЦ Ювэна, ул. Мира 61Б</p>
        <p><img src="{{ asset('images/thumbs/whats_up_thimb.jpg') }}"> What's up:8-917-277-147-6</p>

        <p><img src=" {{ asset('images/thumbs/phone_thumb.jpg') }}">Телефон: 8-917-277-14-76</p>
        <p><img src="{{ asset('images/thumbs/vk_thumb.jpg') }}" > <a href="https://vk.com/avtoboxnk" target="_blank">  Вконтакте</a></p>
        <p><img src="{{ asset('images/thumbs/mail_thumb.jpg') }}" > avtoboxnk@yandex.ru</p>

    </footer>

</div><!-- /.container -->
{{--<script>--}}
    {{--function initMap() {--}}
        {{--var uluru = {lat: 55.644247, lng: 51.804897};--}}
        {{--var map = new google.maps.Map(document.getElementById('map'), {--}}
            {{--zoom: 15,--}}
            {{--center: uluru--}}
        {{--});--}}



        {{--var contentString = '<div id="content">'+--}}
            {{--'<div id="siteNotice">'+--}}
            {{--'</div>'+--}}
            {{--'<h1 id="firstHeading" class="firstHeading">Магазин Автобокс</h1>'+--}}
            {{--'<div id="bodyContent">'+--}}
            {{--'<p><b>Магазин Автобокс.</b> Мы занимаемся продажей и подбором ' +--}}
            {{--'автозапчастей, жидкостей, и аксессуаров для авто. '+--}}
            {{--'Наши клиенты получают самые выгодные цены в городе'+--}}
            {{--'</p>'+--}}
            {{--'<p>Адрес: г.Нижнекамск, ТЦ Ювэна, ул.Мира 61Б</p>'+--}}
            {{--'</div>'+--}}
            {{--'</div>';--}}

        {{--var infowindow = new google.maps.InfoWindow({--}}
            {{--content: contentString--}}
        {{--});--}}
        {{--var iconurl={url:'{{ asset('images/thumbs/sedan_infowindow.png') }}',--}}
            {{--size: new google.maps.Size(55, 65),--}}
            {{--origin: new google.maps.Point(0,0),--}}
            {{--anchor: new google.maps.Point(0, 0)--}}

        {{--};--}}


        {{--var marker = new google.maps.Marker({--}}
            {{--position: uluru,--}}
            {{--map: map,--}}
            {{--title:'Магазин Автобокс',--}}
            {{--label:'Магазин Автобокс',--}}
            {{--icon: iconurl--}}
        {{--});--}}
        {{--marker.addListener('click', function() {--}}
            {{--infowindow.open(map, marker);--}}
        {{--});--}}
        {{--setMarkers(map);--}}
{{--}--}}
{{--</script>--}}
{{--<script async defer--}}
        {{--src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_htpLCgVleshbUGErv-NffwQ_W5bJaq4&callback=initMap">--}}
{{--</script>--}}

@endsection



