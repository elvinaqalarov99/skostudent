@extends('frontend.layouts.main')

@section('bodyClass', 'login__register')

@section('content')
    <main>
        <div class="container">
            <div class="custom__row">
                <div class="left login">
                    <div class="login__title">{{ setting('welcome') }}</div>
                    <div class="login__text">{{ setting('sign-in-to-continue') }}</div>
                    <div class="form__div">
                        <form action="{{ route('user.authenticate') }}" method="POST">
                            @csrf
                            <div class="form__row">
                                <div class="col">
                                    <div class="form__group">
                                        <label class="form__label">{{ setting('email-address') }}</label>
                                        <input class="form__control" type="text" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form__group">
                                        <label class="form__label">{{ setting('password') }}</label>
                                        <input class="form__control" type="password" name="password">
                                        <div class="password__view"><svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 5C10.2044 5 9.44129 5.31607 8.87868 5.87868C8.31607 6.44129 8 7.20435 8 8C8 8.79565 8.31607 9.55871 8.87868 10.1213C9.44129 10.6839 10.2044 11 11 11C11.7956 11 12.5587 10.6839 13.1213 10.1213C13.6839 9.55871 14 8.79565 14 8C14 7.20435 13.6839 6.44129 13.1213 5.87868C12.5587 5.31607 11.7956 5 11 5ZM11 13C9.67392 13 8.40215 12.4732 7.46447 11.5355C6.52678 10.5979 6 9.32608 6 8C6 6.67392 6.52678 5.40215 7.46447 4.46447C8.40215 3.52678 9.67392 3 11 3C12.3261 3 13.5979 3.52678 14.5355 4.46447C15.4732 5.40215 16 6.67392 16 8C16 9.32608 15.4732 10.5979 14.5355 11.5355C13.5979 12.4732 12.3261 13 11 13ZM11 0.5C6 0.5 1.73 3.61 0 8C1.73 12.39 6 15.5 11 15.5C16 15.5 20.27 12.39 22 8C20.27 3.61 16 0.5 11 0.5Z" fill="#C4C4C4"/>
                                            </svg>
                                        </div><a class="password__forget" href="{{ route('email') }}">{{ setting('forgot-your-password') }}</a>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <button class="button__primary mw-210"><span>{{ setting('login') }}</span></button>
                                </div>
                            </div>
                        </form>
                        <div class="divider"></div>
                        <div class="or__login">{{ setting('or') }}</div>
                        <div class="other__login__buttons">
                            <div class="button__row">
                                <div class="col"><a class="button" href="{{ route('login.app', 'google') }}"><img src="{{ asset('assets/images/continue-google.svg') }}"></a></div>
                                <div class="col"><a class="button" href="{{ route('login.app', 'facebook') }}"><img src="{{ asset('assets/images/continue-facebook.svg') }}"></a></div>
{{--                                <div class="col"><a class="button" href="{{ route('login.app', 'sign-in-with-apple') }}"><img src="{{ asset('assets/images/continue-apple.svg') }}"></a></div>--}}
                            </div>
                        </div>
                        <div class="no__register">{{ setting('dont-have-an-account') }}<a href="{{ route('register') }}">
                            {{ setting('register-now') }}</a></div>
                    </div>
                </div>
                <div class="right"><img src="{{ setting('login-page-image') }}"></div>
            </div>
        </div>
    </main>
@endsection
