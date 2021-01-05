<!DOCTYPE html>
<html lang="ua">
<head>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<header class = "header" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
<div class="tm-header-mobile uk-hidden@m">
    <div class="uk-navbar-container">
        <nav uk-navbar="" class="uk-navbar">
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle" href="#tm-mobile" uk-toggle="">
                    <div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon">
        
                    </div>
                </a>
            </div>
            <div class="uk-navbar-center">
            <a href="{{route('homePage')}}" class="uk-navbar-item uk-logo"> <img alt="Tech Space" src="/images/logo.svg"></a>
            </div>
            <div class="uk-navbar-right">
                <a class="uk-navbar-toggle" href="{{route('basket')}}" uk-icon="icon: cart; ratio: 1.4"></a>
            </div>
        </nav>
    </div>
    <div id="tm-mobile" uk-offcanvas="" mode="push" overlay="" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close uk-icon uk-close" type="button" uk-close="">
               
            </button>
            <div class="uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
                <div>
                    <div class="uk-panel">
                        <ul class="uk-nav uk-nav-default">
                        <li><a href="{{route('homePage')}}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">Головна</a>
                            <li class="uk-parent"><a href="{{route('catalog')}}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">Каталог</a>
                                <ul class="uk-nav-sub">
                                @foreach($categoriesForMenu as $category)
                                    <li><a href="{{route('cat', $category->code)}}" class=" menu-item menu-item-type-taxonomy menu-item-object-yo_product_cat">{{$category->name}}</a></li>
                                @endforeach
                                </ul>
                            </li>
                            <li><a href="{{route('basket')}}" class=" menu-item menu-item-type-taxonomy menu-item-object-yo_product_flag">Кошик</a></li>
                            <li><a href="{{route('brandsPage')}}" class=" menu-item menu-item-type-taxonomy menu-item-object-yo_product_flag">Бренди</a></li>
                            <li><a href="{{route('contactsPage')}}" class=" menu-item menu-item-type-post_type menu-item-object-page">Контакти</a></li>
                            <li><a href="{{route('aboutUsPage')}}" class=" menu-item menu-item-type-post_type menu-item-object-page">Про нас</a></li>
                        </ul>
                    </div>
                </div>
                <div> </div>
            </div>
        </div>
    </div>
</div>
<div class="tm-header uk-visible@m" uk-header="">
    <div uk-sticky="" media="@m" cls-active="uk-navbar-sticky" sel-target=".uk-navbar-container" class="uk-sticky uk-sticky-fixed" style="position: fixed; top: 0px; width: 1419.2px;">
        <div class="uk-navbar-container">
            <div class="uk-container uk-container-xlarge">
                <nav class="uk-navbar" uk-navbar="{&quot;align&quot;:&quot;left&quot;,&quot;boundary&quot;:&quot;!.uk-navbar-container&quot;}">
                    <div class="uk-navbar-left">
                        <a href="{{route('homePage')}}" class="uk-navbar-item uk-logo"> <img alt="Tech Space" src="/images/logo.svg"></a>
                        <ul class="uk-navbar-nav">
                            <li class="uk-parent"><a href="{{route('catalog')}}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children el-content uk-button uk-button-text"
                                aria-expanded="false">Каталог</a>
                               <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-3" uk-grid>
                                        @foreach($categoriesForMenu as $category)
                                        <div  class="">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-active"><a href="{{route('cat', $category->code)}}">{{$category->name}}</a></li>
                                            </ul>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            <li class="uk-parent"><a href="{{route('brandsPage')}}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children el-content uk-button uk-button-text"
                                aria-expanded="false">Бренди</a>
                               <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-3" uk-grid>
                                        @foreach($brandsForMenu as $brand)
                                        <div class="">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li class="uk-active"><a href="{{$brand->site}}">{{$brand->name}}</a></li>
                                            </ul>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{route('aboutUsPage')}}" class=" menu-item menu-item-type-post_type menu-item-object-page el-content uk-button uk-button-text">Про нас</a></li>
                            <li><a href="{{route('contactsPage')}}" class=" menu-item menu-item-type-post_type menu-item-object-page el-content uk-button uk-button-text">Контакти</a></li>
                        </ul>
                    </div>
                    <div class="uk-navbar-right">
                   
                        <ul class="uk-navbar-nav">
                        
                            <li><a href="{{route('basket')}}" class=" menu-item menu-item-type-taxonomy menu-item-object-yo_product_flag el-content uk-button uk-button-text">Кошик</a></li>
                            @auth
                                @if(Auth::user()->isAdmin())
                                    <li><a href="{{route('adminIndex')}}" class=" menu-item menu-item-type-post_type menu-item-object-page el-content uk-button uk-button-text">Панель Адмiнiстратора</a></li>
                                    <li><a href="{{route('logout')}}" class=" menu-item menu-item-type-post_type menu-item-object-page el-content uk-button uk-button-text">Вихiд</a></li>
                                @endif
                            @endauth
                        </ul>
                      
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="uk-sticky-placeholder" style="height: 120px; margin: 0px;"></div>
</div>
</header>
<main id="main">
	@yield('content')
</main>
<footer id="footer">
	<div class="uk-section uk-section-secondary">
    <div class="uk-container">
    <div class="tm-grid-expand uk-grid-row-large uk-grid-margin-large uk-grid" uk-grid="">
        <div class="uk-width-1-2@s uk-width-1-3@m uk-first-column">
            <h3 class="uk-h4 uk-margin" style="font-weight: 900;">        Tech Space    </h3>
            <div class="uk-panel uk-margin">вул Пушкiнська 123
                <br> 123 Харкiв
                <br> Украина</div>
            <div class="uk-margin"> <a class="el-content uk-button uk-button-text" href="" target="_blank">
Google Maps
</a> </div>
        </div>
        <div class="uk-width-1-2@s uk-width-1-3@m">
            <h3 class="uk-h4 uk-margin " style="font-weight: 700;">        Каталог    </h3>
            <ul class="uk-list">
            @foreach($categoriesForMenu as $category)
                <li class="el-item">
                    <div class="el-content uk-panel"><a href="{{route('cat', $category->code)}}" style="font-weight: 600;" class="el-content uk-button uk-button-text">{{$category->name}}</a></div>
                </li>
            @endforeach
            </ul>
        </div>
        <div class="uk-width-1-2@s uk-width-1-3@m">
            <h3 class="uk-h4 uk-margin" style="font-weight: 900;">        Iнформацiя    </h3>
            <ul class="uk-list">
                <li class="el-item">
                    <div class="el-content uk-panel"><a href="{{route('brandsPage')}}" style="font-weight: 600;" class="el-content uk-button uk-button-text">Бренди</a></div>
                </li>
                <li class="el-item">
                    <div class="el-content uk-panel"><a href="{{route('contactsPage')}}" style="font-weight: 600;" class="el-content uk-button uk-button-text">Контакти</a></div>
                </li>
                <li class="el-item">
                    <div class="el-content uk-panel"><a href="{{route('aboutUsPage')}}" style="font-weight: 600;" class="el-content uk-button uk-button-text">Про нас</a></div>
                </li>
            </ul>
        </div>
        
        </div>
    </div>
</div>
	</div>
</footer>
    
</body>
</html>