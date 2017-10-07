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
                        </tr>
                        </thead>
                        <tfoot class="table-inverse">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($precincts as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop