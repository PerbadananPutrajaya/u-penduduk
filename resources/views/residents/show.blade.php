@extends('layouts.master')
@section('page-title', 'Show a Resident')
@section('page-content')
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @include('partials.flash-messages')
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('residents') }}">View All Residents</a></li>
                <li><a href="{{ URL::to('residents/create') }}">Create a Resident</a>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <h1>{{ $resident->first_name }} {{ $resident->last_name }}</h1>
            <div class='body'>
                <pre>{{ $resident }}</pre>
            </div>
        </div>
    </div>
@stop