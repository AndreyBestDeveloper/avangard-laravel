@extends('layouts.app')

@section('title-block')Статьи@endsection

@section('content')

<h1 class="montserrat-200">Список статей</h1>

@foreach($data as $el)

        <div class="alert alert-info my-3 montserrat-200" style="background-color: #cecece;">
            <h3>{{ $el->articleName }}</h3>
            <p>Автор: {{ $el->pseudonymName }}</p>
            <p><small>Опубликовано: {{ $el->created_at }}</small></p>
            <p>{{ $el->textArea1 }}</p>
        </div>
        <br>
@endforeach

@endsection
