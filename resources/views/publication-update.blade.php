@extends('layouts.app')

@section('title-block')Редактировать статью@endsection

@section('content')

1234
<!--      
        <div class="container-fluid">
            <h2 class="montserrat-200">Редактировать статью</h2>            
          <div class="container-fluid pb-5">
              <form action="" method="post">
                @csrf
                <div class="mb-3">
                  <label for="articleName" class="form-label">Название статьи</label>
                  <input type="text" name="articleName" value="{{ $data->articleName}}" class="form-control" id="articleName" placeholder="Введите название статьи">
                </div>
                <div class="mb-3">
                  <label for="pseudonymName" class="form-label">Псевдоним</label>
                  <input type="text" name="pseudonymName" value="{{ $data->pseudonymName}}" class="form-control" id="pseudonymName" placeholder="Введите Ваш псевдоним">
                </div>
                <div class="mb-3">
                  <label for="textArea1" class="form-label">Текст статьи</label>
                  <textarea name="textArea1" class="form-control" id="textArea1" rows="10" placeholder="Внесите текст статьи">
                    {{ $data->textArea1}}</textarea>
                </div>
              <button type="submit" class="btn btn-primary">Обновить</button>
              </form>
          </div>
        </div>
-->
<!--{{ route('publication-submit'), $data->id }}-->

@endsection