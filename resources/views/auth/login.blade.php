@extends('layouts.app')

@section('page-title')
    Login- Kamus Dictionary
@endsection

@section('content')
<div class="py-4 px-1 bg-white rounded-bl-xl rounded-br-xl lg:w-3/4 mx-auto">
    <div class="shadow">
        <div class="bg-green-600 text-white p-4 flex justify-between rounded-tl-xl rounded-tr-xl"><h5>{{ __('Login') }}</h5></div>

        <div class="p-4">
            <form method="POST" action="{{ route('login-dashboard') }}">
                @csrf

                <div>
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input class="input-field" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input class="input-field" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit" class="submit-button">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
@endsection
