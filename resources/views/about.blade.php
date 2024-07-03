@extends('layouts.app')

@section('title-block')О нас@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">         
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
        <img class="img-fluid" src="{{asset('/storage/img/o_nas/head_2.png')}}"  alt="Фото девушки-тренера ФК АВАНГАРД">      
      </div>
    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">         
    </div>
  </div>
</div>

<br>

<div class="container">

  <h1 class="text-center text-black montserrat-200">ФК АВАНГАРД включает в себя три направления</h1>     

  <div class="row bg-dark text-center text-white montserrat-100">
    <div class="col-4">
      <h5><br>Тренажёрный зал</h5>
      <img class="img-fluid" src="{{asset('/storage/img/o_nas/trenazh.png')}}"  alt="Тренажёрка"> 
    </div>
    <div class="col-4">
      <h5><br>Фитнес направления</h5>
      <img class="img-fluid" src="{{asset('/storage/img/o_nas/fitness.png')}}"  alt="Фитнес"> 
    </div>
    <div class="col-4">
      <h5><br>Современные танцы.</h5>
      <img class="img-fluid" src="{{asset('/storage/img/o_nas/dance_4.png')}}"  alt="Танцы"> 
    </div>

  </div>
</div>

<br><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-0 col-md-2 col-lg-2">         
    </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <img class="img-fluid" src="{{asset('/storage/img/o_nas/man_girl.png')}}"  alt="Парень и девушка"> 
      </div>
    <div class="col-sm-12 col-md-6 col-lg-6">     
      <br><h1 class="text text-black montserrat-200">Очень удобное расположение клуба
      <img class="img-fluid" src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"  alt="Сердечко">
        <ul class="text-black montserrat-200">
          <li>50 метров от остановки Сич на красной линии</li>
          <li>Зелёная зона прямо на территории</li>
          <li>Комплекс: кафе, батутный центр</li>
        </ul>    
    </div>
  </div>
</div>

<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-0 col-md-1 col-lg-1">     
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">  
      <br><h1 class="text text-black montserrat-200">Действительно профессиональные тренеры, 
        обучают эффективным программам, которые дают отличные результаты
        <img class="img-fluid" src="{{asset('/storage/img/icon/gant.ico')}}"  alt="Гантелька">
        <ul class="text-black montserrat-200">
          <li>Здесь КАЖДЫЙ найдёт своего тренера с комфортным темпераментом</li>
          <li>В ассортименте огромное количество эффективных упражнений и программ</li>
        </ul>        
    </div>
      <div class="col-sm-12 col-md-5 col-lg-5">
        <img class="img-fluid" src="{{asset('/storage/img/o_nas/profess.png')}}"  alt="Картинка тренер и клиент"> 
      </div>
  </div>
</div>

<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-0 col-md-2 col-lg-2">         
    </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <img class="img-fluid" src="{{asset('/storage/img/o_nas/price.png')}}"  alt="Парень и девушка"> 
      </div>
    <div class="col-sm-12 col-md-6 col-lg-6">     
      <br><h1 class="text text-black montserrat-200">Приятные цены на индивидуальные занятия и на абонементы
      <img class="img-fluid" src="{{asset('/storage/img/icon/hart_cl_1.ico')}}"  alt="Сердечко">
        Мы стараемся поддерживать доступность цен на услуги</h1>
        <ul class="text-black montserrat-200">
          <li></li>
        </ul>    
    </div>
  </div>
</div>

<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-0 col-md-1 col-lg-1">     
    </div>
    <div class="col-sm-12 col-md-10 col-lg-10">  
      <br><h1 class="text text-black montserrat-200">Зал готов к работе в текущих условиях
      <img class="img-fluid" src="{{asset('/storage/img/icon/gant.ico')}}"  alt="Гантелька">
        <br>У нас один из самых безопасных залов в городе, 
        а это сейчас очень важно.  </h1>
        <ul class="text-black montserrat-200">
          <li>Имеется в наличии система аварийного освещения</li>
          <li>Зал защищён особенностями конструкции</li>
          <li>Имеется в наличии несколько выходов из зала</li>
        </ul>        
    </div>
    <div class="col-sm-0 col-md-1 col-lg-1">     
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-0 col-md-2 col-lg-2">     
    </div>
    <div class="col-sm-12 col-md-8 col-lg-8">
      <img class="img-fluid" src="{{asset('/storage/img/o_nas/bezopasno_1.png')}}"  alt="Огнетушитель"> 
    </div>
    <div class="col-sm-0 col-md-2 col-lg-2">     
    </div>   
  </div>
</div>

@endsection







