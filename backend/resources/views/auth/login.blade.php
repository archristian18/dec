@extends('auth.layout')
  @section ('content')

    @if (session('fail'))
      <div class="x_content bs-example-popovers">
        <div class="alert alert-danger alert-dismissible" role="alert">
          <strong>{{ session('fail') }}</strong>
        </div>
      </div>
    @endif
    
    <div class="">
      <section class="login_content">
        <form action ="{{ route('auth') }}" method="post">
          {!! csrf_field() !!}
        
          <h3>Login Form</h3>
          <div>
            <input type="text" class="form-control" placeholder="Email" name="email" required="" />
          </div>
          <div>
            <input type="password" class="form-control" placeholder="Password" name="password" required="" />
          </div>
          <div>
            <button class="btn btn-default submit">Log in</button>
          </div>
          <div class="clearfix"></div>
        </form>
          <div class="separator">
            <p class="change_link">New to site?
              <a href="{{ route('create.register') }}"> Create Account </a>
            </p>

          </div>
      </section>
    </div>
  @endsection