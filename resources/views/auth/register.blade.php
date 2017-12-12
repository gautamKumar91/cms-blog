@extends('layouts.app')

@section('content')
<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-50">
    <div class="card">
      <div class="card-content">
        <h1 class="title">Join the Community</h1>
        <form action="{{route('register')}}" method="post" role="form">
          {{csrf_field()}}
          <div class="field">
            <label for="name" class="label">Name</label>
            <p class="control">
              <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name" id="name"  value="{{old('name')}}" required>
            </p>
            @if($errors->has('name'))
              <p class="help is-danger">{{$errors->first('name')}}</p>
            @endif
          </div>
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

          <button class="button is-primary is-fullwidth m-t-20">Register</button>
        </form>
      </div>

    </div>
    <h5 class="has-text-centered m-t-20 "><a href="{{route('login')}}" class="is-muted">Already have an Account?</a></h5>
  </div>
</div>
@endsection
