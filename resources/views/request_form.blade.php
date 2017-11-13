@extends('layouts.appauto')

<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">Avtobox</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}">Домашняя</a></li>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#contact">Контакты</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="jumbotron">
    <div class="container">
        <h1>Мы делаем цены ниже</h1>
        <p>Автозапчасти под заказ. Доставка от 1 дня. Гарантия</p>

    </div>
    <p class="forbtn"> <a class="btn btn-primary btn-lg" role="button">Оставить заявку &raquo;</a></p>

</div>

@section('acontent')
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>


    <div class="container">
<div class="row">

       <span class='center'> <h3>Заполните пожалуйста все поля формы, для того чтобы мы смогли найти оптимальную для вас автозапчасть как по цене так и по качеству</h3>
           <h5>(Поле со звездочкой (*) заполнять необязательно)</h5></span>
      {{ Form::open(['url'=>'request_form']) }}
        <div class="col-xs-6">



        <div class="form-group">
            {!! Form::label('myPhone', 'Номер телефона:') !!}<br>
            {!!  Form::text('phonenumber',null,['class'=>'form-control','maxlength'=>'11','placeholder'=>'9XX-XXXXXXX'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('myMaker', 'Марка авто:') !!}<br>
            {!!  Form::text('automaker',null,['class'=>'form-control','maxlength'=>'30','placeholder'=>'HUYNDAI'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('mymodel', 'Модель:') !!}<br>
            {!!  Form::text('automodel',null,['class'=>'form-control','maxlength'=>'30','placeholder'=>'Solasris'])!!}
        </div>
            <div class="form-group">
                {!! Form::label('myVin', 'Идентификационный номер транспортного средства (VIN):') !!}<br>
                {!!  Form::text('vin',null,['class'=>'form-control','maxlength'=>'17', 'placeholder'=>'12345678912345678'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('myDescription', 'Описание автозапчасти:') !!}<br>
                {!!  Form::textarea('description',null,['class'=>'form-control','maxlength'=>'350','placeholder'=>'Подробное описание необходимой запчасти'])!!}
            </div>


        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <div class="form-group">
                {!! Form::label('myEngineVolume', 'Объем двигателя (л):') !!}<br>
                {!!  Form::text('engine',null,['class'=>'form-control', 'placeholder'=>'1.8','maxlength'=>'3'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('myYear', 'Год выпуска:') !!}<br>
                {!!  Form::text('Year',null,['class'=>'form-control','placeholder'=>'2012','maxlength'=>'4'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('myArt', '(*)Артикул:') !!}<br>
                {!!  Form::text('Artikul',null,['class'=>'form-control'])!!}
            </div>
                <div class="form-group">
                    {!!Form::submit('Отправить заявку',['class'=>'btn btn-primary form-control'])  !!}
                </div>

        </div>
            {{ Form::close() }}
    </div>
</div>
@endsection