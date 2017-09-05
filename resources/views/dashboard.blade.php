@extends('layouts.master')
@section('page-title', 'Dashboard')
@section('page-content')
    <div class="row">
        <div class="col-md-10">
            <h3>Profile Summary</h3>
            <ul>
                <li>Fullname</li>
                <li>Contact</li>
                <li>Mailing Address</li>
                <li>Emergency Contact</li>
            </ul>
            <h3>Registered residence</h3>
            <ul>
                <li>Resident 1 | View household</li>
                <li>Resident 2 | View household</li>
                <li>Resident 3 | View household</li>
                <li>Resident 4 | View household</li>
                <li>Register new resident</li>
            </ul>
        </div>
    </div>
@stop