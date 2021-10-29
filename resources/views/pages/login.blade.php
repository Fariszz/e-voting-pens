@extends('layouts.main')

@section('container')
<section class="container-fluid body-text p-t-125 m-b-200">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5 d-none d-lg-block">
                <img src="assets/img/hero-login.png" alt="landing" class="img-fluid m-l-50">
            </div>
            <div class="col-lg-5 p-t-30 m-l-125 mx-auto">
                <form class="validate-form" action="{{ route('login') }}">
                    <span class="login100-form-title">
                        Login to
                        <h3 class="secondary-text m-t-20">e-Voting Polinema</h3>
                    </span>
                    <div class="p-b-40">
                        <div class="wrap-input100 validate-input" data-validate="Valid ID is required">
                            <input class="input100 @error('nim') is-invalid @enderror" type="text" name="nim" id="nim" type="text" placeholder="Student NIM" value="{{ old('nim') }}" required autofocus>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div class="p-b-20">
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div class="text-end p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Password?
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-12 mx-auto p-t-20">
                        <button class="btn-primary btn btn-lg">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
