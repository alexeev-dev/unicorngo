@extends('layouts.main')

@section('content')

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="panel panel-color panel-primary panel-pages">

            <div class="panel-body">
                <h3 class="text-center m-t-0 m-b-15">
                    <a href="/" class="logo"><img src="{{ asset('assets/images/logo_white.png') }}" alt="logo-img"></a>
                </h3>

                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required="" placeholder="Email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
<!--
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required="" placeholder="Username">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
-->
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                        </div>





                        {{--<div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox" checked="checked">
                                <label for="checkbox-signup">
                                    I accept <a href="#">Terms and Conditions</a>
                                </label>
                            </div>

                        </div>
                    </div>
--}}
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Register</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30 m-b-0">
                        <div class="col-sm-12 text-center">
                            <a href="{{ route('login') }}" class="text-muted">Already have account?</a>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>


@endsection
