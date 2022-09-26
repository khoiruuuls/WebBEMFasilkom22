@extends('layouts.pinjam')

@section('title')
Bemitory
@endsection

@section('content')

<main id="main">

  <section id="login" class="login">
    <div class="container mt-5">
      <div class="form-login">
        <div class="row">
          <div class="col-md">
            <img src="{{ url('pkkmb/assets/img/ilustrasi/login-2.svg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md input">
            {!! Form::open(['route' => 'pinjam.login']) !!}
              <div class="mt-5">
                {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : null), 'placeholder' => 'Masukkan email kamu']) !!}
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mt-4">
                {!! Form::label('password', 'Kata Sandi', ['class' => 'form-label']) !!}
                {!! Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : null), 'placeholder' => 'Masukkan kata sandi']) !!}
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              {{-- <div class="mt-3 text-center">
                <a href="#">Lupa email / kata sandi?</a>
              </div> --}}
              <div class="mt-5">
                {!! Form::submit('Login', ['class' => 'btn-grad']) !!}
              </div>
              <div class="mt-4 text-center">
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- End #main -->
@endsection