@extends('layouts.basic')
@section('page-title', 'Home')
@section('page-content')
    <div class="jumbotron">
        <h1 class="display-3">U-Penduduk</h1>
        <p class="lead">Lorem ipsum dolor sit amet, usu corrumpit gubergren voluptaria ea, qui te iisque iuvaret expetendis. In mea alii modo, magna augue officiis mea cu. Eos modo graeco semper eu. Pro cu gubergren abhorreant. Usu possim debitis id, ei vis mazim postea voluptatum..</p>
        <hr class="my-4">
        <p>Lorem ipsum dolor sit amet, usu corrumpit gubergren voluptaria ea, qui te iisque iuvaret expetendis. In mea alii modo, magna augue officiis mea cu. Eos modo graeco semper eu. Pro cu gubergren abhorreant. Usu possim debitis id, ei vis mazim postea voluptatum..</p>
        <p class="lead text-center">
            <a href="{{ action('LoginController@showLoginPage') }}" class="btn btn-lg btn-primary">
                Login <i class="fa fa-sign-in"></i>
            </a>
        </p>
    </div>
@stop