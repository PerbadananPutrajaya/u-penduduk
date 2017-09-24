@extends('layouts.dashboard')
@section('page-title', 'Dashboard')
@section('page-content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>User Profile</strong>
                </div>
                <div class="card-block">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="full_name">Full Name</label>
                        <div class="col-md-9">
                            <input type="text" disabled id="full_name" value="{{ $profile->first_name }} {{ $profile->last_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="nationality">Nationality</label>
                        <div class="col-md-9">
                            <input type="text" disabled id="nationality" value="{{ $profile->nationality }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="nric">NRIC</label>
                        <div class="col-md-9">
                            <input type="text" disabled id="nric" value="{{ $profile->nric }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="passport">Passport</label>
                        <div class="col-md-9">
                            <input type="text" disabled id="passport" value="{{ $profile->passport }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="gender">Gender</label>
                        <div class="col-md-9">
                            <input type="text" disabled id="gender" value="{{ $profile->gender }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="blood">Blood Group</label>
                        <div class="col-md-9">
                            <input type="text" disabled id="blood" value="{{ $profile->blood_group }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="date_of_birth">Date of Birth</label>
                        <div class="col-md-9">
                            <input type="text" disabled id="date_of_birth" value="{{ $profile->date_of_birth }}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="button btn-sm btn-secondary" href="{{ url('residents/' . $profile->id . '/edit') }}"><i class="fa fa-edit"></i> Edit</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Registered residences</h3>
            <ul>
                <li>Residence 1 | View household</li>
                <li>Residence 2 | View household</li>
                <li>Residence 3 | View household</li>
                <li>Residence 4 | View household</li>
                <li>Register new residence</li>
            </ul>
        </div>
    </div>
@stop