@extends('layouts.basic')
@section('page-title', 'Login')
@section('page-content')
    <div class="card-group mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">U-Penduduk</h4>
                    <h6 class="card-subtitle">Residents Information System</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Please sign in</h4>
                    <div class="card-text">
                        <a href="{{ action('LoginController@auth', ['provider' => 'facebook']) }}"
                           class="btn btn-block btn-lg btn-social btn-facebook social-button">
                            <span class="fa fa-facebook"></span> Facebook
                        </a>
                        <a href="{{ action('LoginController@auth', ['provider' => 'twitter']) }}"
                           class="btn btn-block btn-lg btn-social btn-twitter social-button">
                            <span class="fa fa-twitter"></span> Twitter
                        </a>
                        <a href="{{ action('LoginController@auth', ['provider' => 'google']) }}"
                           class="btn btn-block btn-lg btn-social btn-google social-button">
                            <span class="fa fa-google"></span> Google
                        </a>
                        <a href="{{ action('LoginController@auth', ['provider' => 'live']) }}"
                           class="btn btn-block btn-lg btn-social btn-microsoft social-button">
                            <span class="fa fa-windows"></span> Microsoft
                        </a>
                    </div>
                </div>
            </div>
    </div>
@stop