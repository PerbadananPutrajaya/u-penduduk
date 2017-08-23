@extends('layouts.master')
@section('page-title', 'Please login')
@section('page-content')
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            @include('partials.flash-messages')
        </div>
        <div class="col-sm-6 col-sm-offset-3">
            <h1>Please sign in</h1>
            {{--<ul>--}}
                {{--<li>--}}
                    <a href="{{ action('LoginController@auth', ['provider' => 'facebook']) }}"
                       class="btn btn-block btn-lg btn-social btn-facebook social-button">
                        <span class="fa fa-facebook"></span> Facebook
                    </a>
                {{--</li>--}}
                {{--<li>--}}
                    <a href="{{ action('LoginController@auth', ['provider' => 'google']) }}"
                       class="btn btn-block btn-lg btn-social btn-google social-button">
                        <span class="fa fa-google"></span> Google
                    </a>
                {{--</li>--}}
                {{--<li>--}}
                    <a href="{{ action('LoginController@auth', ['provider' => 'twitter']) }}"
                       class="btn btn-block btn-lg btn-social btn-twitter social-button">
                        <span class="fa fa-twitter"></span> Twitter
                    </a>
                {{--</li>--}}
            {{--</ul>--}}
        </div>
    </div>
@stop