@extends('layouts.app')

@section('title-block')Статьи@endsection

@section('content')

<h1 class="montserrat-200">Список статей</h1>

@foreach($data as $el)

    <div class="container-fliid mx-5 my-5">
        <div class="row">
            <div class="col-12 alert alert-info my-3 montserrat-200" style="background-color: #cecece;">
                <h3>{{ $el->articleName }}</h3>
                <p>Автор: {{ $el->pseudonymName }}</p>
                <p><small>Опубликовано: {{ $el->created_at }}</small></p>
                <!--<p>{{ $el->textArea1 }}</p>-->
                <a href="{{ route('publication-text', $el->id) }}"><button class="btn btn-warning">Читать</button></a>
            </div>
        </div>
    </div>
        
@endforeach

@endsection
