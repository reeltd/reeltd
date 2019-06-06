@extends('layouts.ree')

@section('content')

<body class="hold-transition register-page">
<div class="register-box">
    <div class="justify-content-center">
        <div class="login-logo">
            <img style="width: 120px;" src="{{ asset('assets/imgs/favicon.ico') }}" alt="">
            <a href="/"><b>REE </b>LTE</a>
        </div>            
    </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                        <div class="form-group has-feedback">
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" autofocus value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
