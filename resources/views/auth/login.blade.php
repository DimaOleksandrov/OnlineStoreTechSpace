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
                                        <h2>Вхiд</h2>
                                    </center>
                                    <form method="POST" action="{{route('login')}}">
                                        <fieldset class="uk-fieldset">

                                            <div class="uk-margin uk-flex uk-flex-center">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                                    <input class="uk-input" name="email" type="email" required>
                                                </div>
                                            </div>

                                            <div class="uk-margin uk-flex uk-flex-center">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                                    <input class="uk-input" name="password" type="password" required>
                                                </div>
                                            </div>
                                            <div class="uk-margin uk-flex uk-flex-center">
                                            @csrf
                                                <button type="submit" class="uk-button uk-button-primary">
                                                   Увiйти
                                                </button>
                                            </div>

                                            <hr>

                                            <center>
                                                <a href="{{route('register')}}" class="uk-button uk-button-default">
                                                    Зареєструватись
                                                </a>
                                            </center>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>