@extends('layouts.app')

@section('title-block')Главная@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">         
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">

        <img class="img-fluid" src="{{asset('/storage/img/index/head_1.png')}}"  alt="Фото девушки-тренера ФК АВАНГАРД">      
       
      </div>
    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">         
    </div>
  </div>
</div>

<div class="container">
  <h1 class="text-center text-black montserrat-200">Цены в тренажёрный зал ПРОСТО СУПЕР!!!</h1>     

  <table class="table table-dark table-hover montserrat-100">
    <thead>
      <tr>
        <td scope="col">No</td>
        <td scope="col">Услуга <img src="{{asset('/storage/img/icon/gant_wh_1.ico')}}"/></td>
        <td scope="col">Стоимость</td>
        <td scope="col">Примечание</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>1 занятие</td>
        <td>100 грн <img src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>8 трен</td>
        <td>400 грн <img src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"/></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>12 трен</td>
        <td>450 грн <img src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"/></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Безлим</td>
        <td>500 грн <img src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"/></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Безлим ученик</td>
        <td>330 грн <img src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"/></td>
        <td>Ученический</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Безлим студент</td>
        <td>380 грн <img src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"/></td>
        <td>Студенческий</td>
      </tr>

    </tbody>
  </table>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-0 col-md-2 col-lg-2">         
    </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <img src="{{asset('/storage/img/index/drug.png')}}" class="img-fluid img-center" alt="Картинка друзей">      
      </div>
    <div class="col-sm-12 col-md-6 col-lg-6">     
      <br><h1 class="text text-black montserrat-200">Приведите друга - получите 50% скидку на Ваш абонемент.
      <img class="img-fluid" src="{{asset('/storage/img/icon/gant.ico')}}"  alt="Гантелька">
        <br>+ друг получит 50 грн скидку на свой абонемент.</h1>
        <ul class="text-black montserrat-200">
          <li>Количество друзей неограничено !!!</li>
          <li>Если абонемен куплен, скидка переносится на следующий месяц</li>
          <li>2 друга - 100% скидки</li>
          <li>4 друга - два месяца бесплатно</li>
        </ul>    
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-0 col-md-1 col-lg-1">     
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">  
      <br><h1 class="text text-black montserrat-200">Предложение для студентов и школьников. БЕСПЛАТНЫЙ абонемент!!!
      <img class="img-fluid" src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"  alt="Сердечко">
        <br>Экономите или проблемы с финансами? Это не повод пропускать тренировки.</h1>
        <ul class="text-black montserrat-200">
          <li>Раздайте 250 визиток</li>
          <li>Получите БЕСПЛАТНЫЙ абонемент в тренажёрный зал на 8 занятий</li>
          <li>Можете подарить его кому-угодно</li>
          <li>Можете использовать его в любой месяц до конца этого года</li>
        </ul>        
    </div>
      <div class="col-sm-12 col-md-5 col-lg-5">
        <img src="{{asset('/storage/img/index/stud.png')}}" class="img-fluid img-center" alt="Картинка студентов">      
      </div>
  </div>
</div>

@endsection

@section('footer-block')
  @parent
  <p>footer of the home page</p>
@endsection






