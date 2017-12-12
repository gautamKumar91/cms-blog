@extends('layouts.app')

@section('content')

<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-50">
    <div class="card">
      <div class="card-content">
        <h1 class="title">Log In</h1>
        <form action="{{route('login')}}" method="post" role="form">
          {{csrf_field()}}
          <div class="field">
            <label for="email" class="label">Email Address</label>
            <p class="control">
              <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="email" name="email" id="email"
              placeholder="example@example.com" value="{{old('email')}} " required>
            </p>
            @if($errors->has('email'))
              <p class="help is-danger">{{$errors->first('email')}}</p>
            @endif
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            <p class="control">
              <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" required>
            </p>
            @if($errors->has('password'))
              <p class="help is-danger">{{$errors->first('password')}}</p>
            @endif
          </div>
          <b-checkbox  name="remember" class="m-t-10">Remember Me</b-checkbox>
          <button class="button is-primary is-fullwidth m-t-20">Log In</button>
        </form>
      </div>

    </div>
    <h5 class="has-text-centered m-t-20 "><a href="{{route('password.request')}}" class="is-muted">Forgot Your Password?</a></h5>
  </div>
</div>
@endsection
