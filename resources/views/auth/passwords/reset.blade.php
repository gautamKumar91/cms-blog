@extends('layouts.app')

@section('content')

@if(session('status'))
  <div class="notification is-success">
    {{session('status')}}
  </div>
@endif

<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-50">
    <div class="card">
      <div class="card-content">
        <h1 class="title">Reset Your Password</h1>
        <form action="{{route('password.request')}}" method="post" role="form">
          {{csrf_field()}}
          <input type="hidden" name="token" value="{{ $token }}">
          <div class="field">
            <label for="email" class="label">Email Address</label>
            <p class="control">
              <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="email" name="email" id="email"
              placeholder="example@example.com" value="{{old('email')}}" required>
            </p>
            @if($errors->has('email'))
              <p class="help is-danger">{{$errors->first('email')}}</p>
            @endif
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label for="password" class="label">Password</label>
                <p class="control">
                  <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" required>
                </p>
                @if($errors->has('password'))
                  <p class="help is-danger">{{$errors->first('password')}}</p>
                @endif
              </div>
            </div>
            <div class="column">
              <div class="field">
                <label for="confirm_password" class="label">Confirm Password</label>
                <p class="control">
                  <input class="input {{$errors->has('confirm_password') ? 'is-danger' : ''}}" type="password" name="confirm_password" id="confirm_password" required>
                </p>
                @if($errors->has('confirm_password'))
                  <p class="help is-danger">{{$errors->first('confirm_password')}}</p>
                @endif
              </div>
            </div>
          </div>

          <button class="button is-primary is-fullwidth m-t-20">Reset Password</button>
        </form>
      </div>

    </div>
    <h5 class="has-text-centered m-t-20 "><a href="{{route('login')}}" class="is-muted">Already have an Account?</a></h5>
  </div>
</div>
@endsection
