@extends('app')
@section('title', 'Главная')
@section('content')
    <div class="container">
        <div class="w-100 pt-5 mb-5">
            <h1>Услуги</h1>
        </div>
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{ $service }}</li>
            @endforeach
        </ul>
    </div>
@endsection
