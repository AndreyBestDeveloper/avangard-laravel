@extends('layouts.app')

@section('title-block')Регистрация@endsection

@section('content')


<!--@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
      @endforeach
    </ul>
  </div>
@endif-->
            <h2 class="montserrat-200">Регистрация клиента клуба</h2>

            
            <div class="container-fluid pb-5">
              <form action="{{ route('process-user') }}" method="post" autocomplete='off'>
                @csrf

                <div class="mb-3">
                  @error('name')
                    <div class="text-danger">{{ $message }}
                      <img class="img-fluid" src="{{asset('/storage/img/icon/gant_red.ico')}}"  alt="">
                    </div>
                  @enderror
                  <label for="name" class="form-label {{ $errors->has('name') ?  'text-danger' : 'text-dark' }}">Фамилия Имя
                    @if ($errors->has('name'))
                     <!-- <img class="img-fluid" src="{{asset('/storage/img/icon/gant_red.ico')}}"  alt=""> --> 
                    @endif
                  </label>
                  <input type="text" name="name" value="{{old('name')}}" autofocus class="form-control" id="name" 
                  placeholder="Введите Вашу фамилию и имя ">             
                </div>

                <div class="mb-3">
                  @error('email')
                    <div class="text-danger">{{ $message }}
                      <img class="img-fluid" src="{{asset('/storage/img/icon/gant_red.ico')}}"  alt="">
                    </div>
                  @enderror
                  <label for="email" class="form-label {{ $errors->has('email') ?  'text-danger' : 'text-dark' }}">Эл адрес</label>
                    @if ($errors->has('email'))
                      <!-- <img class="img-fluid" src="{{asset('/storage/img/icon/gant_red.ico')}}"  alt=""> -->
                    @endif
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
                  <input type="password" name="password" class="form-control" id="password" placeholder="Пароль минимум 4 символа">
                </div>

                <div class="mb-3">
                  <label for="password_confirmation" class="form-label">Подтверждение</label>
                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Подтвердите пароль">
                </div>
              
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button></a>

              </form>
            </div>

@endsection

@section('header-block')
  @parent
    <a href="{{ route('home') }}"><button class="btn btn-dark btn-sm mx-2">Выход из регистрации</button></a>
@endsection
