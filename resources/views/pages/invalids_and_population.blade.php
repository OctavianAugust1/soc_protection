@extends('app')
@section('title', 'Отношение кол-ва инвалидов ко всему населению')
@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-center pt-5">
            <h1 class="shadow-lg pl-5 pr-5 pt-2 pb-2">Отношение кол-ва инвалидов ко всему населению</h1>
        </div>
        <div class="chart-block">
            <canvas id="oilChart"></canvas>
        </div>
    </div>
@endsection
