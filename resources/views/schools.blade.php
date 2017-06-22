@extends('layouts.master')

@section('content')
<div class="content-area">
    <div class="container">
    @foreach ($schools as $school)
        <div class="row page-title text-center">
            <h2><a href="/schools/{{ $school->id }}" >{{ $school->name }}</a></h2>
            <h5>{{ $school->address }}</h5>
            <h5>{{ $school->phone }}</h5>
            <h5>{{ $school->fax }}</h5>
        </div>
    @endforeach
    </div>
</div>
@stop
