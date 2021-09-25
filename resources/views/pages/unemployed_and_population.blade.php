@extends('app')
@section('title', 'Число безработных относительно всего населения')
@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-center pt-5">
            <h1 class="shadow-lg pl-5 pr-5 pt-2 pb-2">Число безработных относительно всего населения</h1>
        </div>
        <div class="chart-block">
            <canvas id="popChart" width="600" height="200"></canvas>
        </div>
    </div>
@endsection
