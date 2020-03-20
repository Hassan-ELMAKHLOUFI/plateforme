@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ action('Auth\SessionController@sessionLogin') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input pattern="[a-zA-Z]{4,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max" id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input pattern="[a-zA-Z0-9]{4,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max" id="password" type="password" class="form-control @if(!empty(Session::get('error'))) is-invalid @endif" name="password" required autocomplete="current-password">

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ Session::get('error') }}</strong>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
