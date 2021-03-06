@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-5" style="margin: 100px auto;">
                <div class="card" style=" padding: 17px 0px 0px; ">
                  <img src="/img/logotype.png" style=" height: auto; width: 145px; display: block; margin: 10px auto 25px; "/>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                  <button type="submit" class="btn btn-primary">
                                      Login
                                  </button>
                              </div>
                              <div class="col-md-6">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection
