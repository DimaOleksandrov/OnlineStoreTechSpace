<!DOCTYPE html>
<html lang="">
<head>
<title>Панель Адміністратора</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hidden.css') }}" rel="stylesheet">
</head>

<body>
        <div uk-sticky="" class="uk-navbar-container tm-navbar-container uk-sticky uk-sticky-fixed">
            <div class="uk-container uk-section-secondary uk-container-expand">
                <nav uk-navbar="" class="" uk-navbar">
                    <div class="uk-navbar-left">
                        <button uk-toggle="target: #my-id" type="button" class="uk-navbar-toggle uk-navbar-toggle-icon uk-icon" uk-navbar-toggle-icon=""></button>
                        <p>
                            <a href="{{route('adminIndex')}}" aria-expanded="false" class="">Панель Адміністратора</a>
                        </p>
                    </div>
                    <div class="uk-navbar-right uk-light">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="{{route('logout')}}" aria-expanded="false" class="">Вихiд</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="uk-width-1-1 uk-height-1-1 uk-flex uk-flex-row">
        <div id="my-id" class="uk-width-1-6" uk-offcanvas="mode: push">
            <div class="uk-offcanvas-bar" >
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <div class="">
                    <center>
                        <div class="user">
                            <div class="uk-text-truncate uk-text-emphasis">{{Auth::user()->name}}</div>
                            <div class="uk-text-truncate uk-text-emphasis">{{Auth::user()->email}}</div>
                        </div>
                        <br>
                    </center>
                    <ul class="uk-nav uk-nav-default">
                        <li class="uk-parent"> 
                            <a   class="uk-text-emphasis"style="font-weight: 700; font-size:1.3rem;" href="{{route('orders.index')}}">Замовлення</a>
                        </li>
                        <li class="uk-parent"> <a class="uk-text-emphasis"  style="font-weight: 700; font-size:1.3rem;"href="{{route('categories.index')}}">Категории</a>
                            <ul  class="uk-nav-sub">
                                <li><a class="uk-text-emphasis" href="{{route('categories.create')}}">Додати категорiю</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent"> <a  class="uk-text-emphasis"style="font-weight: 700; font-size:1.3rem;" href="{{route('products.index')}}">Товар</a>
                            <ul  class="uk-nav-sub">
                                <li><a class="uk-text-emphasis" href="{{route('products.create')}}">Додати Товар</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent"> <a  class="uk-text-emphasis"style="font-weight: 700; font-size:1.3rem;" href="{{route('brands.index')}}">Бренд</a>
                            <ul  class="uk-nav-sub">
                                <li><a class="uk-text-emphasis" href="{{route('brands.create')}}">Додати Бренд</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent"> 
                            <a   class="uk-text-emphasis"style="font-weight: 700; font-size:1.3rem;" href="{{route('homePage')}}">Повернутися до магазину</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="uk-width-expand uk-height-1-1 content-padder content-background">
               @yield('content')
        </div>

</body>
</html>