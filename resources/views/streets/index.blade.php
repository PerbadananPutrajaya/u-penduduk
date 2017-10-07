@extends('layouts.dashboard')
@section('page-title', 'Streets List')
@section('page-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Streets List</strong>
                </div>
                <div class="card-block">
                    <table id="streets_list" class="table table-striped table-sm table-bordered" cellspacing="0"
                           width="100%">
                        <thead class="table-inverse">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Postcode</th>
                            <th>Precincts</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot class="table-inverse">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Postcode</th>
                            <th>Precincts</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($streets as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->postcode }}</td>
                                <td>{{ $value->precinct->name }}</td>
                                <!-- we will also add show, edit, and delete buttons -->
                                <td>
                                    <!-- delete the resident (uses the destroy method DESTROY /residents/{id} -->
                                    <a class="btn btn-small btn-outline-danger"
                                       href="{{ URL::to('streets/' . $value->id . '/destroy') }}"><i
                                                class="fa fa-trash-o"
                                                aria-hidden="true"></i>
                                    </a>
                                    {{--<button type="button" class="btn btn-outline-success" data-toggle="modal"--}}
                                            {{--data-target="#resident_profile"--}}
                                            {{--data-name="{{ $value->first_name }}"--}}
                                            {{--data-nationality="{{ $value->nationality }}"--}}
                                            {{--data-nric="{{ $value->nric }}"--}}
                                            {{--data-passport="{{ $value->passport }}"--}}
                                            {{--data-gender="{{ $value->gender }}"--}}
                                            {{--data-blood_group="{{ $value->blood_group }}"--}}
                                            {{--data-date_of_birth="{{ $value->date_of_birth }}"--}}
                                            {{--data-user_id="{{ $value->user_id }}"--}}
                                    {{--><i class="fa fa-eye" aria-hidden="true"></i></button>--}}
                                    <!-- edit this resident (uses the edit method found at GET /residents/{id}/edit -->
                                    <a class="btn btn-small btn-outline-info"
                                       href="{{ URL::to('streets/' . $value->id . '/edit') }}"><i
                                                class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop