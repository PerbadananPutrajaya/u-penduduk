@extends('layouts.dashboard')
@section('page-title', 'Residents List')
@section('page-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Residents List</strong>
                </div>
                <div class="card-block">
                    <table id="residents_list" class="table table-striped table-sm table-bordered" cellspacing="0"
                           width="100%">
                        <thead class="table-inverse">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Nationality</th>
                            <th>NRIC No</th>
                            <th>Passport No</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot class="table-inverse">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Nationality</th>
                            <th>NRIC No</th>
                            <th>Passport No</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($residents as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->first_name }}</td>
                                <td>{{ $value->last_name }}</td>
                                <td>{{ $value->nationality }}</td>
                                <td>{{ $value->nric }}</td>
                                <td>{{ $value->passport }}</td>
                                <!-- we will also add show, edit, and delete buttons -->
                                <td>
                                    <!-- delete the resident (uses the destroy method DESTROY /residents/{id} -->
                                    <a class="btn btn-small btn-outline-danger"
                                       href="{{ URL::to('residents/' . $value->id . '/destroy') }}"><i
                                                class="fa fa-trash-o"
                                                aria-hidden="true"></i>
                                    </a>
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                            data-target="#resident_profile"
                                            data-first_name="{{ $value->first_name }}"
                                            data-last_name="{{ $value->last_name }}"
                                            data-nationality="{{ $value->nationality }}"
                                            data-nric="{{ $value->nric }}"
                                            data-passport="{{ $value->passport }}"
                                            data-gender="{{ $value->gender }}"
                                            data-blood_group="{{ $value->blood_group }}"
                                            data-date_of_birth="{{ $value->date_of_birth }}"
                                            data-user_id="{{ $value->user_id }}"
                                    ><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    <!-- edit this resident (uses the edit method found at GET /residents/{id}/edit -->
                                    <a class="btn btn-small btn-outline-info"
                                       href="{{ URL::to('residents/' . $value->id . '/edit') }}"><i
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

    {{-- Modal Dialog --}}
    <div class="modal fade" id="resident_profile" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Resident Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="first_name" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="first_name" disabled class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="last_name" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="last_name" disabled class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nationality" class="col-sm-3 col-form-label">Nationality</label>
                        <div class="col-sm-9">
                            <input type="text" id="nationality" disabled class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nric" class="col-sm-3 col-form-label">NRIC No</label>
                        <div class="col-sm-9">
                            <input type="text" id="nric" disabled class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="passport" class="col-sm-3 col-form-label">Passport No</label>
                        <div class="col-sm-9">
                            <input type="text" id="passport" disabled class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                            <input type="text" id="gender" disabled class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood_group" class="col-sm-3 col-form-label">Blood Group</label>
                        <div class="col-sm-9">
                            <input type="text" id="blood_group" disabled class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_of_birth" class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                            <input type="text" id="date_of_birth" disabled class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_id" class="col-sm-3 col-form-label">Linked User Id</label>
                        <div class="col-sm-9">
                            <input type="text" id="user_id" disabled class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
                $('#residents_list').DataTable();

                $('#resident_profile').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var first_name = button.data('first_name')
                    var last_name = button.data('last_name')
                    var nationality = button.data('nationality')
                    var nric = button.data('nric')
                    var passport = button.data('passport')
                    var gender = button.data('gender')
                    var blood_group = button.data('blood_group')
                    var date_of_birth = button.data('date_of_birth')
                    var user_id = button.data('user_id')
                    var modal = $(this)
                    modal.find('#first_name').val(first_name)
                    modal.find('#last_name').val(last_name)
                    modal.find('#nationality').val(nationality)
                    modal.find('#nric').val(nric)
                    modal.find('#passport').val(passport)
                    modal.find('#gender').val(gender)
                    modal.find('#blood_group').val(blood_group)
                    modal.find('#date_of_birth').val(date_of_birth)
                    modal.find('#user_id').val(user_id)
                })
            }
        );
    </script>
@stop