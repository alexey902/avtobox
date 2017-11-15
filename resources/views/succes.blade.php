@extends('layouts.appauto')
@section('acontent')
    <nav class="navbar navbar-inverse navbar-static-top" id="forzeromargin">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Автобокс</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="{{url('/#production')}}">Продукция</a></li>

                    <li><a href="{{url('/#mcontact')}}">Контакты</a></li>
                    <li><a href="{{url('/#mcontact')}}">Как нас найти</a></li>

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

    <div class="container text-center succes">

        Ваша заявка рассматривается. Ожидайте звонка...
        <p class="forbtn"> <a class="btn btn-default btn-lg active succesbutton" role="button" href="{{url('/')}}">Вернуться на главную</a></p>


    </div>

@endsection