@extends('layouts.app')

@section('title-block')Опубликовать@endsection

@section('content')
      
      <nav class="navbar navbar-expand-xs montserrat-200">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#newArticleSupportedContent" aria-controls="newArticleSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="">Опубликовать статью</span>
          </button>

          <div class="collapse navbar-collapse" id="newArticleSupportedContent">
            <h2 class="montserrat-200">Для публикации статьи, заполните форму</h2>
            
            <div class="container-fluid pb-5">
              <form action="{{ route('article-form') }}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="articleName" class="form-label">Название статьи</label>
                  <input type="text" name="articleName" class="form-control" id="articleName" placeholder="Введите название статьи">
                </div>
                <div class="mb-3">
                  <label for="pseudonymName" class="form-label">Псевдоним</label>
                  <input type="text" name="pseudonymName" class="form-control" id="pseudonymName" placeholder="Введите Ваш псевдоним">
                </div>
                <div class="mb-3">
                  <label for="textArea1" class="form-label">Текст статьи</label>
                  <textarea name="textArea1" class="form-control" id="textArea1" rows="10" placeholder="Внесите текст статьи"></textarea>
                </div>
              <button type="submit" class="btn btn-primary">Опубликовать</button>
              </form>
            </div>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row">
          <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">         
          </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
              <img class="img-fluid" src="{{asset('/storage/img/trener/head_3.png')}}"  alt="Фото девушки-тренера ФК АВАНГАРД">      
            </div>
          <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">         
          </div>
        </div>
      </div>


@endsection