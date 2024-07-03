@extends('layouts.app')

@section('title-block')Расписание@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">         
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
        <img class="img-fluid" src="{{asset('/storage/img/rasp/head_4.png')}}"  alt="Фото девушки-тренера ФК АВАНГАРД">      
      </div>
    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">         
    </div>
  </div>
</div>

<div class="container">
  <h1 class="text-center text-black montserrat-200">Расписание тренажёрного зала ФК АВАНГАРД</h1>     

  <table class="table table-dark table-hover montserrat-100">
    <thead>
      <tr>
        <td scope="col">Время</td>
        <td scope="col">День недели 
          <img class="img-fluid" src="{{asset('/storage/img/icon/gant_wh_1.ico')}}"  alt="Гантелька"></td>
        <td scope="col">Тренер</td>
        <td scope="col">Примечание</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">7:30-20:00</th>
        <td>Понедельник</td>
        <td>Олег Носик 
          <img class="img-fluid" src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"  alt="Сердечко">
        </td>
        <td>Утро</td>
      </tr>
      <tr>
        <th scope="row">9:00-21:00</th>
        <td>Вторник</td>
        <td>Андрей Кириенко 
          <img class="img-fluid" src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"  alt="Сердечко">        </td>
        <td>Вечер</td>
      </tr>
      <tr>
        <th scope="row">9:00-21:00</th>
        <td>Среда</td>
        <td>Наталья Сычёва 
          <img class="img-fluid" src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"  alt="Сердечко">        </td>
        <td>Вечер</td>
      </tr>
      <tr>
        <th scope="row">9:00-21:00</th>
        <td>Четверг</td>
        <td>Андрей Кириенко 
          <img class="img-fluid" src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"  alt="Сердечко">        </td>
        <td>Вечер</td>
      </tr>
      <tr>
        <th scope="row">7:30-20:00</th>
        <td>Пятница</td>
        <td>Олег Носик 
          <img class="img-fluid" src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"  alt="Сердечко">
        </td>
        <td>Утро</td>
      </tr>
      <tr>
        <th scope="row">9:00-20:00</th>
        <td>Суббота</td>
        <td>Андрей Кириенко 
          <img class="img-fluid" src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"  alt="Сердечко">        </td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">9:00-21:00</th>
        <td>Воскресенье</td>
        <td>Наталья Сычёва 
          <img class="img-fluid" src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"  alt="Сердечко">
        </td>
        <td></td>
      </tr>

    </tbody>
  </table>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-0 col-md-1 col-lg-1">     
    </div>
    <div class="col-sm-12 col-md-10 col-lg-10">  
      <br><h1 class="text text-black montserrat-200">Время работы зала очень широко
        <img src="obsh/icon/gant.ico"/><br>Каждый клиент может подобрать любое, удобное для тренировок</h1>
    </div>
    <div class="col-sm-0 col-md-1 col-lg-1">     
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-0 col-md-1 col-lg-1">     
    </div>
    <div class="col-sm-12 col-md-10 col-lg-10">
      <img class="img-fluid" src="{{asset('/storage/img/rasp/time_1.png')}}"  alt="Фото девушки клиентки">      
    </div>
    <div class="col-sm-0 col-md-1 col-lg-1">     
    </div>   
  </div>
</div>

@endsection





