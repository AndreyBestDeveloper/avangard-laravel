@section('header-block')  
    <nav class="navbar navbar-expand-md montserrat-200">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}" style="color: #2c2c2c;">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('publish') }}">Опубликовать</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('publication-list') }}">Статьи</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('schedule') }}">Расписание</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('gallery') }}">Фото</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Контакт</a>
              </li>
            </ul>
          </div>
            <a class="navbar-brand">
              <img src="{{asset('/storage/img/icon/gant.ico')}}" alt="Гантелька"/>
            </a> 
        </div>
      </nav>
<!--Секцию не закрываем-->
