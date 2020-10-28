
@extends('layouts.app')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <b>S.Gestão de Mercearia</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Faça o login para aceder a aplicação</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
          <input type="email" id="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">
                  {{ __('Login') }}
            </button>
          </div>
        </div>


          <div class="col-12 mt-2 ml-0">
            <div class="#">
              <label style="margin-left: -14px;">
                    Crie uma conta.
                    <a href="{{route('register')}}">
                      Registar
                    </a>
              </label>
            </div>
          </div>
        </div>
      </form>
  </div>
</div>
@endsection


