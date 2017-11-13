<!DOCTYPE html>
<html>
<head>
    <title>Новый заказ</title>
</head>
<body>
<h1> Описание запроса </h1><br>

<h5>Номер телефона клиента: {{  $myrequest['phonenumber']}} </h5><br>
<h5>Марка автомобиля:  {{$myrequest['automaker']}} </h5><br>
<h5>Модель автомобиля:  {{$myrequest['automodel']}} </h5><br>
<h5>Идентификационный номер (VIN):  {{$myrequest['vin']}} </h5><br>


<h5>Описание автозапчасти:  {{$myrequest['description']}} </h5><br>
<h5>Объем двигателя (л):  {{$myrequest['engine']}} </h5><br>
<h5>Год выпуска:  {{$myrequest['Year']}} </h5><br>
<h5>Артикул:  {{$myrequest['Artikul']}} </h5><br>





    ,
</body>



</html>
