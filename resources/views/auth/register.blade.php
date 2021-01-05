<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
	<script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="uk-section-large">
                <div class="uk-container uk-container-large">
                    <div class="uk-child-width-1-1@s uk-child-width-1-4@l  uk-flex-center uk-flex">
                        <div class="uk-width-1-1@s uk-width-1-4@l uk-width-1-4@xl">
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-body">
                                    <center>
                                        <h2>Реєстрація</h2>
                                    </center>
                                    <form method="POST" action="{{route('register')}}">
                                        <fieldset class="uk-fieldset">

                                        <div class="uk-margin uk-flex uk-flex-center">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                                    <input class="uk-input" type="text" name="name" placeholder="name" value="{{ old('name') }}">
                                                </div>
                                            </div>

                                            <div class="uk-margin uk-flex uk-flex-center">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                                    <input  class="uk-input" type="email" name="email" placeholder="email" value="{{ old('email') }}">
                                                </div>
                                            </div>

                                            <div class="uk-margin uk-flex uk-flex-center">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                                    <input class="uk-input" placeholder="password" type="password" name="password">
                                                </div>
                                            </div>    

                                            <div class="uk-margin uk-flex uk-flex-center">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                                    <input class="uk-input" placeholder="repeat password"  type="password" name="password_confirmation">
                                                </div>
                                            </div>  

                                            <div class="uk-margin uk-flex uk-flex-center">
                                                <button type="submit" class="uk-button uk-button-primary">
                                                Зареєструватись
                                                </button>
                                            </div>

                                            <hr>

                                            <center>
                                                <p>
                                                    Ви вже маєте аккаунт?
                                                </p>
                                            </center>
                                            <center>
                                                <a href="{{route('login')}}" class="uk-button uk-button-default">
                                                    Увiйти
                                                </a>
                                            </center>
                                        </fieldset>
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>