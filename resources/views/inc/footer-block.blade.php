@section('footer-block')
    <footer py-5>
      <div class="row bg-dark montserrat-200">
        <div class="col-12 text-center text-white">
          <p><br>
            Мы находимся: Тополь 2, ул. Паникахи 61 (в клубе Тайм Аут он же батутный центр Джампер), 
            Остановка "Сич".</p>
          <p>Телефон для консультаций: 050 342 36 27</p>
        </div>

        <div class="text-center col-12 pb-3"> 
          <img src="{{asset('/storage/img/icon/fb.ico')}}" alt="Фэйсбук">         
          <img src="{{asset('/storage/img/icon/ins.ico')}}" alt="Инстограмм">        
          <img src="{{asset('/storage/img/icon/in.ico')}}" alt="Линк">        
          <img src="{{asset('/storage/img/icon/ytb.ico')}}" alt="Ютуб">         
          <img src="{{asset('/storage/img/icon/tel.ico')}}" alt="Телефон">       
        </div>
      </div>  
    </footer>
    <br>
    
    @show
<!--Секцию не закрываем-->