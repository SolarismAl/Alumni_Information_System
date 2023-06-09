@extends('layouts.app')

<title>Log In</title>

@section('content')
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}"
              placeholder="Enter a valid email address" />
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-outline mb-3">
            <input id="password" type="password" class="form-control form-control-lg" name="password" required
              autocomplete="current-password" placeholder="Enter password">
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
           @if ($errors->any())
              <div class="alert alert-danger" role="alert">
                {{ $errors->first() }}
              </div>
            @endif
          <div class="d-flex justify-content-between align-items-center">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">{{ __('Login') }}</button>
          </div>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('register') }}" class="link-danger">Register</a></p>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
