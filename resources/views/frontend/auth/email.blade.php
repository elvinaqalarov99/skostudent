@extends('frontend.layouts.main')

@section('bodyClass', 'login__register')

@section('content')
    <main>
        <div class="container">
            <div class="custom__row">
                <div class="left login">
                    <div class="login__title">{{ setting('welcome') }}</div>
                    <div class="login__text">{{ setting('enter-your-email-address-to-continue') }}</div>
                    <div class="form__div">
                        <form action="{{ route('send.token') }}" method="POST">
                            @csrf
                            <div class="form__row">
                                <div class="col">
                                    <div class="form__group">
                                        <label class="form__label">{{ setting('email-address') }}</label>
                                        <input class="form__control" type="text" name="email">
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <button class="button__primary mw-210"><span>{{ setting('continue') }}</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right"><img src="{{ setting('login-page-image') }}"></div>
            </div>
        </div>
    </main>
@endsection
