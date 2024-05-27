@extends('layouts.app')

@section('title','Laravel')

@section('content')

<main>
    <div class="container">
        <h1>Treni in partenza oggi</h1>
    </div>
    <div class="container">
        {{--Elenco dei treni--}}
        <table class="table">
            <thead>
                <tr>
                    <th>Codice treno</th>
                    <th>Partenza</th>
                    <th>Arrivo</th>
                    <th>Orario partenza</th>
                    <th>Orario arrivo</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{$train->train_code}}</td>
                            <td>{{$train->departure_station}}</td>
                            <td>{{$train->arrival_station}}</td>
                            <td>{{$train->departure_time}}</td>
                            <td>{{$train->arrival_time}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</main>

@endsection