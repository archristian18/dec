@extends('auth.layout')
@section ('content')

        <div class="">
          <section class="login_content">
            <form action="{{ route('register') }}" method="post">
              {!! csrf_field() !!}

              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" name="name" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="email" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit">Submit</button>
              </div>

              <div class="clearfix"></div>
            </form>
              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="{{ route ('login.page') }}"> Log in </a>
                </p>

              </div>

          
          </section>
        </div>

@endsection