{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
<div class="col-md-6">

    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                        <a href="{!! url('/index'); !!}"><img src="{{ asset('images/logo-full.png') }}" alt=""></a>
                    </div>
                    <h4 class="text-center mb-4 text-white">Registrar una cuenta</h4>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show">
                            @foreach($errors->all() as $error)
                            <strong>-</strong> {{ $error }} <br>
                            @endforeach
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                        @endif
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Primer mombre</strong></label>
                            <input name="primer_nombre" type="text" class="form-control" placeholder="Primer mombre" value="{{ old('primer_nombre') }}">
                            @if ($errors->has('primer_nombre'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('primer_nombre') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Apellido paterno</strong></label>
                            <input name="apellido_paterno" type="text" class="form-control" placeholder="Apellido paterno">
                            @if ($errors->has('apellido_paterno'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('apellido_paterno') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Email</strong></label>
                            <input name="email" type="email" class="form-control" placeholder="hello@example.com">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Password</strong></label>
                            <input name="password" type="password" class="form-control" value="">
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Password</strong></label>
                            <input name="password_confirmation" type="password" class="form-control" value="">
                            @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn bg-white text-primary btn-block">Registrarme</button>
                        </div>
                    </form>
                    <div class="new-account mt-3">
                        <p class="text-white">¿Ya tienes una cuenta? <a class="text-white" href="{{ route('login') }}">Ingresa</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection