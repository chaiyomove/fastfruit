@extends('layouts.master')

@section('content')

            <section class="noo-page-heading eff">
                <div class="container">
                    <div class="noo-heading-content">
                        <h1 class="page-title eff">ตั้งรหัสผ่านใหม่</h1>
                    </div>
                </div>
            </section>
            <div class="main">
                <div class="commerce commerce-account noo-shop-main pt-5 pb-7">
                    <div class="container">
                        <div class="row">
                            <div class="noo-main col-md-12">
                                <div class="col-md-3"></div>
                                <div id="customer_login">
                                    <div class="col-md-6">
                                        <h2>ตั้งรหัสผ่านใหม่</h2>

                                        <form class="login" role="form" method="POST" action="{{ url('/password/reset') }}">

                                            {{ csrf_field() }}

                                            <input type="hidden" name="token" value="{{ $token }}">

                                            <div class="form-row form-row-wide{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email">
                                                    อีเมล
                                                    <span class="required">*</span>
                                                </label>

                                                <input id="email" type="email" class="input-text" name="email" value="{{ $email or old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                            <div class="form-row form-row-wide{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="password">
                                                    รหัสผ่านใหม่
                                                    <span class="required">*</span>
                                                </label>

                                                <input id="password" type="password" class="input-text" name="password" required>
                                                
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                            <div class="form-row form-row-wide{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                <label for="password-confirm">
                                                    ยืนยันรหัสผ่านใหม่
                                                    <span class="required">*</span>
                                                </label>

                                                <input id="password-confirm" type="password" class="input-text" name="password_confirmation" required>
                                                
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                            <div class="form-row">
                                                <input type="submit" class="button" name="login" value="บันทึกรหัสผ่าน" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
                <div class="noo-footer-shop-now">
                    
                </div>
            </div>




<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
