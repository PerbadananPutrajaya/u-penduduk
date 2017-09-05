@extends('layouts.master')
@section('page-title', 'Residents')
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
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Gender</td>
                    <td>Date Of Birth</td>
                    <td>Linked User ID</td>
                </tr>
                </thead>
                <tbody>
                @foreach($residents as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->first_name }}</td>
                        <td>{{ $value->last_name }}</td>
                        <td>{{ $value->gender }}</td>
                        <td>{{ $value->date_of_birth }}</td>
                        <td>{{ $value->user_id }}</td>

                        <!-- we will also add show, edit, and delete buttons -->
                        <td>

                            <!-- delete the nerd (uses the destroy method DESTROY /residents/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->

                            <!-- show the nerd (uses the show method found at GET /residents/{id} -->
                            <a class="btn btn-small btn-success" href="{{ URL::to('residents/' . $value->id) }}">Show this
                                Resident</a>

                            <!-- edit this nerd (uses the edit method found at GET /residents/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('residents/' . $value->id . '/edit') }}">Edit
                                this Resident</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop