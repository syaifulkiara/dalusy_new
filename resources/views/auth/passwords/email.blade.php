@extends('layouts.auth')

@section('content')
<h5 class="card-title">{{ __('Reset Password') }}</h5>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <label for="email" class=" col-form-label text-md-end">{{ __('Email Address') }}</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <br>
    <button type="submit" class="btn btn-primary">{{ __('Send Password Reset Link') }}</button>
    <a href="{{ url('/') }}" class="btn btn-danger">{{ __('Back Home') }}</a>
</form>
@endsection
