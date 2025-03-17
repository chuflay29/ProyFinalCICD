{{-- Extends layout --}}
@extends('templatec.layout.fullwidth')
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
                    <h4 class="text-center mb-4 text-white">{{ __('Login') }}</h4>
                    <form method="POST" action="{{ route('login.custom') }}">
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
                            <label class="mb-1 text-white"><strong>Correo electrónico</strong></label>
                            <input name="email" type="email" class="form-control" value="" placeholder="">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Contraseña</strong></label>
                            <input name="password" type="password" class="form-control" value="">
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                       
                        <div class="text-center">
                            <button type="submit" class="btn bg-white text-primary btn-block">Ingresar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection