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

                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Reset Password. Enter your <b>Email</b> and instructions will be sent to you!
                    </div>

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group text-center m-t-30 m-b-0">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Send Mail</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

@endsection
