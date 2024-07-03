@extends('layouts.app')

@section('title-block')Контакт@endsection

@section('content')

    <div class="container py-3">
      <div class="row">
        <div class="col-1">         
        </div>
        <div class="text-center col-2"> 
          <img class="img-fluid" src="{{asset('/storage/img/cont/adres.png')}}"  alt="Адрес">      
        </div>
          <div class="col-8">
            <h1 class="text-black montserrat-200">Мы находимся: Тополь 2, ул. Паникахи 61 (в клубе Тайм Аут он же батутный центр Джампер), Остановка "Сич".</h1> 
          </div>
        <div class="col-1">         
        </div>
      </div>
    </div>

    <div class="container py-3">
      <div class="row">
        <div class="col-1">         
        </div>
        <div class="text-center col-2"> 
          <img class="img-fluid" src="{{asset('/storage/img/cont/phone.png')}}"  alt="Телефон">      
        </div>
          <div class="col-8">
            <h1 class="text-black montserrat-200">Телефон для консультаций:<br>050 342 36 27</h1> 
          </div>
        <div class="col-1">         
        </div>
      </div>
    </div>

    <div class="container-fluid py-3">
      <div class="row">
        <div class="col-sm-0 col-md-0 col-lg-1">         
        </div>
        <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-5 py-3"> 
          <img class="img-fluid" src="{{asset('/storage/img/cont/kliyent_2.png')}}"  alt="Пара клиентов">      
        </div>
        <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-5 py-3">
          <img class="img-fluid" src="{{asset('/storage/img/cont/kliyent_1.png')}}"  alt="Пара клиентов">      
        </div>
        <div class="col-sm-0 col-md-0 col-lg-1">         
        </div>
      </div>
    </div>

    <div class="container py-3">
      <div class="row text-center ">
        <div class="col-12"> 
          <img class="img-fluid" src="{{asset('/storage/img/cont/fb.png')}}"  alt="Фейсбук">      
          <img class="img-fluid" src="{{asset('/storage/img/cont/ins.png')}}"  alt="Инстограмм">      
          <img class="img-fluid" src="{{asset('/storage/img/cont/in.png')}}"  alt="Линк">      
          <img class="img-fluid" src="{{asset('/storage/img/cont/ytb.png')}}"  alt="Ютуб">      
          <img class="img-fluid" src="{{asset('/storage/img/cont/tel.png')}}"  alt="Телефон">
        </div>
      </div>
    </div>

@endsection


