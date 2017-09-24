@extends('layouts.dashboard')
@section('page-title', 'Create a Resident')
@section('page-content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Register new resident</h4>
            {!! Form::open(['action' => 'ResidentController@store']) !!}
            @include('residents.form', ['submitButtonText' => 'Register'])
            {!! Form::close() !!}
        </div>
    </div>
@stop