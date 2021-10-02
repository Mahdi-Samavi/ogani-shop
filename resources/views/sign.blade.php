@extends('layouts.main')

@section('title', __('Sign in / Sign up'))

@section('content')
<div class="container">
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="row">
    <div class="col-md-6 col-sm-12">
      <form action="{{ route('sign.up') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">{{ __('Name') }}</label>
          <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">{{ __('Email') }}</label>
          <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">{{ __('Password') }}</label>
          <input type="password" name="password" id="password" class="form-control"/>
        </div>
        <div class="mb-3">
          <label for="rpassword" class="form-label">{{ __('Repeat password') }}</label>
          <input type="password" name="rpassword" id="rpassword" class="form-control"/>
        </div>
        <button class="btn btn-primary">{{ __('Register') }}</button>
      </form>
    </div>
    <div class="col-md-6 col-sm-12">
      <form action="{{ route('sign.in') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">{{ __('Email') }}</label>
          <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">{{ __('Password') }}</label>
          <input type="password" name="password" id="password" class="form-control"/>
        </div>
        <button class="btn btn-primary">{{ __('Login') }}</button>
      </form>
    </div>
  </div>
</div>
@endsection