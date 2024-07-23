@extends('layouts.app')

@section('title-block')Регистрация@endsection

@section('content')


            <h2 class="montserrat-200">Введите Ваш логин и пароль</h2>

            
            <div class="container-fluid pb-5">
              <form action="{{ route('loginconfirm') }}" method="post" autocomplete='off'>
                @csrf
<!--
                <div class="mb-3">
                  @error('name')
                    <div class="text-danger">{{ $message }}
                      <img class="img-fluid" src="{{asset('/storage/img/icon/gant_red.ico')}}"  alt="">
                    </div>
                  @enderror
                  <label for="name" class="form-label {{ $errors->has('name') ?  'text-danger' : 'text-dark' }}">Логин
                  </label>
                  <input type="text" name="name" value="{{old('name')}}" autofocus class="form-control" id="name" 
                  placeholder="Введите логин">             
                </div>
-->
                <div class="mb-3">
                  @error('email')
                    <div class="text-danger">{{ $message }}
                      <img class="img-fluid" src="{{asset('/storage/img/icon/gant_red.ico')}}"  alt="">
                    </div>
                  @enderror
                  <label for="email" class="form-label {{ $errors->has('email') ?  'text-danger' : 'text-dark' }}">Эл адрес</label>
                  <input type="text" name="email" value="{{old('email')}}" class="form-control" id="email" placeholder="Введите Ваш электронный адрес">
                </div>

                <div class="mb-3">
                  @error('password')
                    <div class="text-danger">{{ $message }}
                      <img class="img-fluid" src="{{asset('/storage/img/icon/gant_red.ico')}}"  alt="">
                    </div>
                  @enderror
                  <label for="password" class="form-label {{ $errors->has('password') ?  'text-danger' : 'text-dark' }}">Пароль</label>
                    @if ($errors->has('password'))
                      <!-- <img class="img-fluid" src="{{asset('/storage/img/icon/gant_red.ico')}}"  alt=""> -->
                    @endif
                  <input type="password" name="password" class="form-control" id="password" placeholder="Введите пароль">
                </div>

              
                <div class="container-fluid">
                  <div class="row pb-3">
                    <div class="form-check col-6 col-md-4 col-lg-3">
                      <input class="" type="checkbox" name="remember" id="remember" checked>
                      <label class="" for="remember">
                        Запомни меня
                      </label>
                    </div>
                    <div class="col-6" >
                      <a href="forgot-password.html">Забыли пароль?</a>
                    </div>
                  </div>
                </div>
            
                <button type="submit" class="btn btn-primary">Ввести</button></a>

              </form>
            </div>

@endsection

@section('header-block')
  @parent
    <a href="{{ route('home') }}"><button class="btn btn-dark btn-sm mx-2">Возврат на главную страницу</button></a>
@endsection
