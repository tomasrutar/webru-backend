@extends('WebruBackendViews::layouts.simple')

@section('title', 'Login')

@section('__page')
    <div class="box-middle">
        <div class="login">
            <h2>Přihlásit se</h2>
            <form action="{{ route('/backend/login') }}" method="post">
            <div class="form-group">
                <input name="email" placeholder="E-mail" value="{{ old('email') }}" class="form-control" required autofocus>
            </div>
                <div class="form-group">
                    <input name="email" placeholder="E-mail" value="{{ old('email') }}" class="form-control" required>
                </div>

                <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember"> Zapamatovat si
                    </label>
                </div>
                </div>
            <button type="submit" class="btn btn-block btn-app">Přihlásit</button>
            </form>
        </div>
    </div>
@endsection