@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="pages-head">
        <h3>LOGIN</h3>
    </div>
    <div class="login">
        <div class="row">
            <form method="POST" action="{{ route('login') }}" class="col s12">
                @csrf
                <div class="input-field">
                    <input type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="password" class="validate @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"><h6>Forgot Password ?</h6></a>
                @endif
                <button type="submit" class="button-default">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
