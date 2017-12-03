@extends('layouts.appauto')


@section('acontent')
    <nav class="navbar navbar-inverse navbar-static-top">
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

    @if ($errors->any())
        <div class="alert alert-danger formargin">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container-fluid centerrequest">
       <div class="row">

       <div class='text-center'>
           <h3>Заполните пожалуйста все поля формы, для того чтобы мы смогли найти оптимальную для вас автозапчасть как по цене так и по качеству</h3>
       </div>
      {{ Form::open(['url'=>'request_form']) }}
        <div class="col-xs-6">



        <div class="form-group">
            {!! Form::label('myPhone', 'Номер телефона:') !!}<br>
            {!!  Form::text('phonenumber',null,['class'=>'form-control','maxlength'=>'10','placeholder'=>'9XXXXXXXXX'])!!}
        </div>
            <div>
            <ul>
                @if ($errors->has('phonenumber'))


                <li class="alert-danger">{{$errors->first('phonenumber')}}</li>

                @endif
            </ul></div>
        <div class="form-group">
            {!! Form::label('myMaker', 'Марка авто:') !!}<br>
            {!!  Form::text('automaker',null,['class'=>'form-control','maxlength'=>'30','placeholder'=>'HUYNDAI'])!!}
        </div>
            <div><ul>
                @if ($errors->has('automaker'))
                    <li class="alert-danger">{{$errors->first('automaker')}}</li>
                @endif
                </ul>
            </div>
            <div class="form-group">
            {!! Form::label('mymodel', 'Модель:') !!}<br>
            {!!  Form::text('automodel',null,['class'=>'form-control','maxlength'=>'30','placeholder'=>'Solaris'])!!}
        </div>
            <div><ul>
                    @if ($errors->has('automodel'))
                        <li class="alert-danger">{{$errors->first('automodel')}}</li>
                    @endif
                </ul>
            </div>
            <div class="form-group">
                {!! Form::label('myVin', 'Идентификационный номер транспортного средства (VIN):') !!}<br>
                {!!  Form::text('vin',null,['class'=>'form-control','maxlength'=>'17', 'placeholder'=>'12345678912345678'])!!}
            </div>
            <div><ul>
                    @if ($errors->has('vin'))
                        <li class="alert-danger">{{$errors->first('vin')}}</li>
                    @endif
                </ul>
            </div>
            <div class="form-group">
                {!! Form::label('myDescription', 'Описание автозапчасти:') !!}<br>
                {!!  Form::textarea('description',null,['class'=>'form-control','maxlength'=>'350','placeholder'=>'Подробное описание необходимой запчасти'])!!}
            </div>
            <div><ul>
                    @if ($errors->has('description'))
                        <li class="alert-danger">{{$errors->first('description')}}</li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <div class="form-group">
                {!! Form::label('myEngineVolume', 'Объем двигателя (л):') !!}<br>
                {!!  Form::text('engine',null,['class'=>'form-control', 'placeholder'=>'1.8','maxlength'=>'3'])!!}
            </div>
                <div><ul>
                        @if ($errors->has('engine'))
                            <li class="alert-danger">{{$errors->first('engine')}}</li>
                        @endif
                    </ul>
                </div>

            <div class="form-group">
                {!! Form::label('myYear', 'Год выпуска:') !!}<br>
                {!!  Form::text('Year',null,['class'=>'form-control','placeholder'=>'2012','maxlength'=>'4'])!!}
            </div>
                <div><ul>
                        @if ($errors->has('Year'))
                            <li class="alert-danger">{{$errors->first('Year')}}</li>
                        @endif
                    </ul>
                </div>
            <div class="form-group">
                {!! Form::label('myArt', 'Артикул (заполнять не обязательно):') !!}<br>
                {!!  Form::text('Artikul',null,['class'=>'form-control','maxlength'=>'50'])!!}
            </div>
                <div><ul>
                        @if ($errors->has('Artikul'))
                            <li class="alert-danger">{{$errors->first('Artikul')}}</li>
                        @endif
                    </ul>
                </div>

                <div class="form-group">
                    {!!Form::submit('Отправить заявку',['class'=>'btn btn-primary form-control'])  !!}
                </div>
                <div >
                    <p>Нажимая на кнопку вы принимаете условия <a href="{{url('regulations')}}">Положения</a> и <a href="{{url('agreement')}}">Соглашения</a> на обработку персональных данных </p>
                </div>

        </div>
            {{ Form::close() }}
    </div>
</div>
    </div>
   @endsection