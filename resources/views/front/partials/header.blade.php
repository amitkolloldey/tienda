<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{config('app.name')}}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/select2/css/select2.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/jquery.bxslider/jquery.bxslider.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/owl.carousel/owl.carousel.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/jquery-ui/jquery-ui.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/reset.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}"/>
    @yield('styles')
</head>
<body class="@yield('bodyclass')">
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="{{asset('assets/images/phone.png')}}"
                    />00-62-658-658</a>
                <a href="#"><img alt="email" src="{{asset('assets/images/email.png')}}"/>Contact us today!</a>
            </div>

            <div class="support-link">
                <a href="#">Services</a>
                <a href="#">Support</a>
            </div>


            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    @guest
                        <a href="{{route('login')}}"><span>Login</span></a>
                    @else
                        <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                           href="#"><span>My Account</span></a>
                        <ul class="dropdown-menu mega_dropdown" role="menu">
                            <li><a href="#">Compare</a></li>
                            <li><a href="#">Wishlists</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>

                    @endguest

                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">

                <a href="{{route('home')}}"><img alt="{{setting('site.title')}}" src="{{url('storage/'.setting('site.logo'))}}"/></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <div class="aa-input-container" id="aa-input-container">
                    <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search Products"
                           name="search" autocomplete="on" />
                    <div class="button_search pull-right btn-search">
                        <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
                            <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                <a class="cart-link" href="{{route('cart.index')}}">
                    <span class="title">Shopping cart</span>
                    <span class="total">{{Gloudemans\Shoppingcart\Facades\Cart::count()}} items -
                        ${{Gloudemans\Shoppingcart\Facades\Cart::total()}}</span>
                    <span class="notify notify-left">{{Gloudemans\Shoppingcart\Facades\Cart::count()}}</span>
                </a>
                @if(Gloudemans\Shoppingcart\Facades\Cart::count()>0)
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title">{{Gloudemans\Shoppingcart\Facades\Cart::count()}} Items in my cart</h5>
                        <div class="cart-block-list">
                            <ul>
                                @forelse(Gloudemans\Shoppingcart\Facades\Cart::content() as $cartproduct)
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="{{$cartproduct->model->slug}}">
                                            <img class="img-responsive" src="{{asset('storage/'
                                            .$cartproduct->model->image)
                                            }}" alt="{{$cartproduct->name}}">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">{{$cartproduct->name}}</p>
                                        <p class="p-rice">${{$cartproduct->price}}</p>
                                        <p>Qty: {{$cartproduct->qty}}</p>
                                    </div>
                                </li>
                                @empty
                                    <li class="alert alert-info">
                                        <p>No Item In The Cart</p>
                                    </li>
                                    @endforelse
                            </ul>
                        </div>
                        <div class="toal-cart">
                            <span>Total</span>
                            <span class="toal-price pull-right">${{Gloudemans\Shoppingcart\Facades\Cart::total()}}</span>
                        </div>
                        <div class="cart-buttons">
                            <a href="{{route('cart.index')}}" class="btn-check-out">Go To Cart</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="title-menu">Categories</span>
                            <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                        </h4>
                        <div class="vertical-menu-content is-home">
                            <ul class="vertical-menu-list">
                                @forelse($header_product_categories as $category)
                                <li><a href="{{route('product.category',$category->slug)}}"><i class="fa {{$category->icon}}"></i>
                                        {{$category->name}}</a></li>
                                    @empty
                                <li>No Category</li>
                                    @endforelse
                            </ul>
                            <div class="all-category"><span class="open-cate"><a href="{{route('shop.products')
                            }}">All Categories <i class="fa fa-angle-right"></i></a></span></div>

                        </div>
                    </div>
                </div>
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                {{menu('main-menu','front.menus.main-menu')}}
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->