@extends('layouts.pages')

@section('content')
    <div class="container" id="registerPage">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">Registrasi Tim</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Username</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" autofocus>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Email</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Konfirmasi Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Data Perguruan Tinggi</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('institution_name') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Nama Perguruan Tinggi</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="institution_name" value="{{ old('institution_name') }}">

                                    @if ($errors->has('institution_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('institution_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('institution_address') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Alamat Perguruan Tinggi</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="institution_address" value="{{ old('institution_address') }}">

                                    @if ($errors->has('institution_address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('institution_address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Verifikasi</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Captcha</label>

                                <div class="col-md-6">
                                    {!! app('captcha')->display(); !!}

                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-danger">
                        <div class="panel-heading"><span class="fa fa-exclamation-triangle tosicon"></span> &nbsp; Syarat dan Ketentuan</div>
                        <div class="panel-body">

                             <div class="form-group{{ $errors->has('accept_terms') ? ' has-error' : '' }}">
                                <label class="col-md-1 control-label"></label>

                                <div class="col-md-11 checkbox">
                                    <label><input type="checkbox" name="accept_terms">Saya memastikan bahwa data yang diisikan adalah benar dan saya setuju dengan <a href="{{ url('competitions/terms') }}" target="_blank">syarat dan ketentuan</a> yang berlaku</label>

                                    @if ($errors->has('accept_terms'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('accept_terms') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2 submit-button">
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
