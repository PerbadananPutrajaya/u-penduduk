@extends('layouts.dashboard')
@section('page-title', 'Show a Resident')
@section('page-content')
    <div class="row">
        <div class="col">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('residents') }}">View All Residents</a></li>
                <li><a href="{{ URL::to('residents/create') }}">Create a Resident</a>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>{{ $resident->first_name }} {{ $resident->last_name }}</h1>
            <div class='body'>
                <pre>{{ $resident }}</pre>
            </div>
        </div>
    </div>
@stop