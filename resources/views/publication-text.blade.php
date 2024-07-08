@extends('layouts.app')

@section('title-block'){{ $data->articleName }}@endsection

@section('content')

<h1 class="montserrat-200">{{ $data->articleName }}</h1>

    <div class="container-fliid mx-5 my-5">
        <div class="row">
            <div class="col-12 alert alert-info my-3 montserrat-200" style="background-color: #cecece;">
                <p>Автор: {{ $data->pseudonymName }}</p>
                <p><small>Опубликовано: {{ $data->created_at }}</small></p>
                <p>{{ $data->textArea1 }}</p>
                <a href="{{ route('publication-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
            </div>
        </div>
    </div>        

@endsection
