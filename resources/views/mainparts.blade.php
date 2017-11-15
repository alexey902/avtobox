@extends('layouts.appauto')

@section('acontent')
<div class="container-fluid">


        {{--<h1>{{$message}}</h1>--}}
    {{--</div>--}}

    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top" id="forzeromargin">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Автобокс</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="#production">Продукция</a></li>

                    <li><a href="#mcontact">Контакты</a></li>
                    <li><a href="#mcontact">Как нас найти</a></li>

                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Напишите нам <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('request_form')}}">Оставить запрос</a></li>

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

<div class="container-fluid marketing" id="production">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('images/thumbs/svecha_140.jpg') }}" alt="Generic placeholder image">
            <h2>Комплектующие части двигателя, коробки передач</h2>
            <p>Большой выбор поставщиков комплектующих на любое транспортное средство. Будь то поршень, подшипник, передаточный механизм, ремень ГРМ, стартер или что-то еще </p>
            <p><a class="btn btn-default" href="{{url('request_form')}}" role="button">Сделать запрос</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('images/thumbs/bochka_nefti_140.jpg') }}" alt="Generic placeholder image">
            <h2>Жидкости для авто</h2>
            <p>Высококачественные антифризы, тормозные, стеклоомывающие жидкости, промывки, присадки,  герметизирующие составы, ароматизаторы. Мы поможем разобраться и вовремя применить</p>
            <p><a class="btn btn-default" href="{{url('request_form')}}" role="button">Сделать запрос</a></p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('images/thumbs/stojka_stabilizatora_140.jpg') }}" alt="Generic placeholder image">
            <h2>Элементы подвески и рулевого управления</h2>
            <p>Большой выбор производителей автозапчастей отличаются как по цене так и по качеству. Имея за плечами большой опыт подбора комплектующих, мы поможем вам не переплатить и получить качественный товар</p>
            <p><a class="btn btn-default" href="{{url('request_form')}}" role="button">Сделать запрос</a></p>

        </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


    <!-- START THE FEATURETTES -->



    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Вы будете приятно удивлены</h2>
            <p class="lead">Заказав запчасти у нас один раз вы будете приятно удивлены ценой и качеством продукции. Мы предлагаем самые низкие цены на качественные автозапчасти.
            </p><p class="lead">Мы отсеиваем продукцию низкого качества на основе нашего опыта, чтобы вы экономили ваше время и средства, </p>
        </div>
        <div class="col-md-5"></div>
    </div>
</div>
    <!-- /END THE FEATURETTES -->
<!--Google Maps      -->
            <h3>Google Maps</h3>
            <div id="map"></div>
             <div class="container" id="mcontact">
                <div class="row">
                    <div class="col-md-6">
                        <p>  Наш адрес: г. Нижнекамск, ТЦ Ювэна, ул. Мира 61Б</p>
                    </div>
                    <div class="col-md-6">

                        <p class="pull-right"><a href="#">Наверх страницы</a></p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 text-center" id="firstcolfoot">
                        <p><img src="{{ asset('images/thumbs/whats_up_thimb.jpg') }}">What's up: 8-917-277-14-76</p>
                        <p><img src=" {{ asset('images/thumbs/phone_thumb.jpg') }}">  Телефон: 8-917-277-14-76</p>
                    </div>
                    <div class="col-md-6 text-center" id="seccolfoot">
                        <p><img src="{{ asset('images/thumbs/vk_thumb.jpg') }}" > <a href="https://vk.com/avtoboxnk" target="_blank">  Вконтакте</a></p>
                        <p><img src="{{ asset('images/thumbs/mail_thumb.jpg') }}" >avtoboxnk@yandex.ru</p>
                    </div>
                </div>
            </div>
</div>
@endsection



