@extends('layouts.dashboard')
@section('page-title', 'Create a Resident')
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
            {!! Form::model($resident, ['method' => 'PATCH', 'action' => ['ResidentController@update',$resident->id]]) !!}
            @include('residents.form', ['submitButtonText' => 'Save'])
            {!! Form::close() !!}
        </div>
    </div>
@stop