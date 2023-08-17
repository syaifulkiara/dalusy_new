@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="pages-head">
        <h3>REGISTER</h3>
    </div>
    <div class="register">
        <div class="row">
            <form method="POST" action="{{ route('register') }}" class="col s12">
                @csrf
                <div class="input-field">
                    <input type="text" class="validate @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="email" placeholder="Email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" class="validate @error('password') is-invalid @enderror" name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Confirm Password" name="password_confirmation" class="validate" required>
                </div>
                <button type="submit" class="button-default">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
