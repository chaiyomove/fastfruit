@extends('layouts.master')

<!-- Main Content -->
@section('content')

            <section class="noo-page-heading eff">
                <div class="container">
                    <div class="noo-heading-content">
                        <h1 class="page-title eff">ลืมรหัสผ่าน</h1>
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

                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        
                                        @if ($errors->has('email'))
                                            <div class="alert alert-danger">
                                                {{$errors->first('email')}}                                                
                                            </div>                                            
                                        @endif

                                        <form class="login" role="form" method="POST" action="{{ url('/password/email') }}">

                                            {{ csrf_field() }}

                                            <div class="form-row form-row-wide{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email">
                                                    อีเมล
                                                    <span class="required">*</span>
                                                </label>

                                                <input id="email" type="email" class="input-text" name="email" value="{{ old('email') }}" required>

                                                {{-- @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif --}}
                                                
                                            </div>
                                            <div class="form-row">
                                                <input type="submit" class="button" name="login" value="ส่งลิงค์สำหรับตั้งรหัสผ่านใหม่" />
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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
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
