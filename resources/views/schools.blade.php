@extends('layouts.master')

@section('content')
<div class="content-area">
    <div class="container">
        <div class="row page-title text-center skole">
            <ul class="list-group">
                @foreach ($schools as $school)
                    <li class="list-group-item">
                            <h4><a href="/schools/{{ $school->id }}" >{{ $school->name }}</a></h4>
                            <h5>Kategorije: {{ $school->categories }}</h5>
                            <h5>Adresa: {{ $school->address }}</h5>
                            <h4>Ocjena: {{ number_format($school->averageRating(), 2) }}</h4>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@stop

