@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p></p>
                @foreach ($a as $h)
                    <h1>{{$h->name}}</h1>
                    <h4>Standort: {{$h->standort}}</h4>
                    <h4>Ranking: {{$h -> ranking}}</h4>
                @endforeach

            </div>
        </div>
    </div>

@endsection