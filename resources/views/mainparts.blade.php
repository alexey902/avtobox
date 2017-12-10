@extends('layouts.appauto')

@section('acontent')


        {{--<h1>{{$message}}</h1>--}}

    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
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
<div class=""  id="forzeromargin">
<div class="jumbotron center-block">
    <div class="container-fluid">
        <h1>Мы делаем цены ниже</h1>
        <p class="description">Автозапчасти под заказ. Доставка от 1 дня. Гарантия</p>
        <p class="forbtn"> <a class="btn btn-primary btn-lg" role="button" href="{{url('request_form')}}">Оставить заявку &raquo;</a></p>

    </div>
</div>
</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container-fluid marketing" id="production">
    {{--   Carousel for avtobrends     --}}
<h2 class="text-center">Лучшая цена на подлокотники для различных марок автомобилей</h2>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <div class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Шевроле Круз" src="{{ asset('images/Podl_th/CH-CRUZE_th.jpg') }}">
                            <div class="caption text-center">
                                 <h5>Шевроле Круз - 1800 руб.</h5>
                                 <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Шевроле Лачетти" src="{{ asset('images/Podl_th/CH-LACH_th1.jpg')}}">
                            <div class="caption text-center">
                                <h5>Шевроле Лачетти - 1850 руб.</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Дэу Нексия" src="{{ asset('images/Podl_th/Dew_Nex_th1.jpg')}}">
                            <div class="caption text-center">
                                <h5>Деу Нексиа - 1780 руб.</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Форд Фокус" src="{{ asset('images/Podl_th/FORD-FOCUS-III-th.jpg')}}">
                            <div class="caption text-center">
                                <h5>Форд Фокус - 1800 руб.</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <div class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Хендай Солярис" src="{{ asset('images/Podl_th/Hyu-Sol_th.jpg') }}">
                            <div class="caption text-center">
                                <h5>Хёндай Соларис - 1910 руб.</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Лада Калина" src="{{ asset('images/Podl_th/Lada-Kal_th.jpg')}}">
                            <div class="caption text-center">
                                <h5>Лада Калина - 1850 руб.</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Лада Веста" src="{{ asset('images/Podl_th/Lada-Vesta_th.jpg')}}">
                            <div class="caption text-center">
                                <h5>Лада Веста - 1880 руб.</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Лада X-Ray" src="{{ asset('images/Podl_th/Lada-XRAY-th.jpg')}}">
                            <div class="caption text-center">
                                <h5>Лада X-Ray - 1850 руб.</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <div class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Опель Астра" src="{{ asset('images/Podl_th/OPEL-ASTRA-G_th.jpg') }}">
                            <div class="caption text-center">
                                <h5>Опель Астра - 1800 руб.</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Рено Логан" src="{{ asset('images/Podl_th/Renault-Logan-II_th.jpg')}}">
                            <div class="caption text-center">
                                <h5>Рено Логан - 1840 руб.</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Тойота Авенсис" src="{{ asset('images/Podl_th/TOY-AV.jpg')}}">
                            <div class="caption text-center">
                                <h5>Тойота Авенсис - 1900 руб.</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="Шкода Октавиа" src="{{ asset('images/Podl_th/TOY-AV_th2.jpg')}}">
                            <div class="caption text-center">
                                <h5>Шкода Октавиа</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <div class="container"><a class="pull-right" href="#" target="_blank">
            Перейти к выбору подлокотника >>> </a>
    </div>
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


            <div class="center-block" id="map"></div>
             <div class="container" id="mcontact">
                <div class="row">
                    <div class="col-md-6">
                        <p>  Наш адрес: г. Нижнекамск, ТЦ Ювэна, ул. Мира 63Б</p>
                    </div>
                    <div class="col-md-6">

                        <p class="pull-right"><a href="#">Наверх страницы</a></p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 text-center" id="firstcolfoot">
                        <p><img src="{{ asset('images/thumbs/whats_up_thimb.jpg') }}">What's up: 8-917-394-04-66</p>
                        <p><img src=" {{ asset('images/thumbs/phone_thumb.jpg') }}">  Телефон: 8-917-394-04-66</p>
                    </div>
                    <div class="col-md-6 text-center" id="seccolfoot">
                        <p><img src="{{ asset('images/thumbs/vk_thumb.jpg') }}" > <a href="https://vk.com/avtoboxnk" target="_blank">Вконтакте/avtoboxnk</a></p>
                        <p><img src="{{ asset('images/thumbs/mail_thumb.jpg') }}" >avtoboxnk@mail.ru</p>
                    </div>
                </div>
            </div>

@endsection



