@extends('layouts.app')

@section('title-block')Статьи@endsection

@section('content')

<h1 class="montserrat-200">Публикация статьи</h1>

@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


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


@endsection