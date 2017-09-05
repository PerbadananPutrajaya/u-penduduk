@extends('layouts.master')
@section('page-title', 'Create a Resident')
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
            {!! Form::model($resident, ['method' => 'PATCH', 'action' => ['ResidentController@update',$resident->id]]) !!}
            @include('residents.form', ['submitButtonText' => 'Edit Resident'])
            {!! Form::close() !!}
        </div>
    </div>
@stop