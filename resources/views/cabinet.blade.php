@extends('layouts.app')

@section('title-block')Личный кабинет@endsection

@section('content')

<h1>Личный кабинет</h1>

<br><br><br><br>

<br><br><br><br>

@endsection



@section('header-block')
  @parent

  <form method="post" action="{{ route('destroy')  }}">
    @csrf
    <a href="{{ route('destroy') }}"><button class="btn btn-dark btn-sm mx-2">Выход из личного кабинета</button></a>

  </form>


  <a href="{{ route('home') }}"><button class="btn btn-dark btn-sm mx-2">Возврат в главное меню</button></a>
  @endsection




