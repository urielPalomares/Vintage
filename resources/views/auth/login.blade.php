@extends('layouts.auth')

@section('content')
    <form method="post" action="{{route('login')}}">
        @csrf

        <div class="inputs">
            <div class="form-group">
                <div class="icon-input">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg>
                    </div>
                    <input id="username" type="text" name="username" placeholder="Usuario" value="{{old('username')}}">
                </div>
                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <div class="icon-input">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.26 11.74L10 14H8v2H6v2l-2 2H0v-4l8.26-8.26a6 6 0 1 1 4 4zm4.86-4.62A3 3 0 0 0 15 2a3 3 0 0 0-2.12.88l4.24 4.24z"/></svg>
                    </div>
                    <input id="password" type="password" name="password" placeholder="Contraseña">
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-outline-success btn-lg" type="submit">
                Entrar
            </button>
        </div>
    </form>
@endsection
