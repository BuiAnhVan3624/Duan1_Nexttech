<style>
    .menu-account {
        margin-left: 15px;
        box-shadow: 1px 1px 10px 0px #c1c1c1;
        border-radius: 3px;
    }

    .account {
        /* margin-bottom: 50px; */
        padding-bottom: 10px;
    }

    .menu-account li a span:hover {
        color: #ec4840;
    }

    .menu-account li a span {
        color: black;
    }
</style>
<header class="main-header-wrapper position-relative">
    <div class="header-top">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="header-top-align">
                        <div class="header-top-align-start">
                            <div class="desc">
                                <p>World Wide Completely Free Returns and Free Shipping</p>
                            </div>
                        </div>
                        <div class="header-top-align-end">
                            <div class="header-info-items">
                                <div class="info-items">
                                    <ul>
                                        <li class="number"><i class="fa fa-phone"></i><a href="tel://0123456789">0362411201</a></li>
                                        <li class="email"><i class="fa fa-envelope"></i><a href="mailto://demo@example.com">vanbaph31911@fpt.edu.vn</a></li>
                                        @if(Auth::check())
                                            @if(Auth::user()->role == '0')
                                                <li class="account has-submenu"><i class="fa fa-user"></i><a href="#">{{ Auth::user()->name }}</a>
                                                    <ul class="submenu-nav menu-account" style="background-color: white;">
                                                        <li><a href="{"><span>Tài khoản của tôi</span></a></li>
                                                        <!-- <li><a href="#"><span>Đơn hàng</span></a></li> -->
                                                        <li><a href="{{ route('logout') }}"><span>Đăng xuất</span></a></li>
                                                    </ul>
                                                </li>
                                            @elseif(Auth::user()->role == '1')
                                                <li class="account has-submenu"><i class="fa fa-user"></i><a href="#">{{ Auth::user()->name }}</a>
                                                    <ul class="submenu-nav menu-account" style="background-color: white;">
                                                        <li><a href="{{ route('admin.index') }}"><span>Trang quản trị</span></a></li>
                                                        <li><a href=""><span>Tài khoản của tôi</span></a></li>
                                                        <!-- <li><a href="#"><span>Đơn hàng</span></a></li> -->
                                                        <li><a href="{{ route('logout') }}"><span>Đăng xuất</span></a></li>
                                                    </ul>
                                                </li>
                                            @else
                                            @endif
                                        @else
                                        <li class="account"><i class="fa fa-user"></i><a href="{{ route('login') }}">Account</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container pt--0 pb--0">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="header-middle-align">
                        <div class="header-middle-align-start">
                            <div class="header-logo-area">
                                <a href="">
                                    <img class="logo-main" src="{{ asset('image_chinh/anh.png') }}" width="131" height="34" alt="Logo" />
                                    <img class="logo-light" src="" width="131" height="34" alt="Logo" />
                                </a>
                            </div>
                        </div>
                        <div class="header-middle-align-center">
                            <div class="header-search-area">
                                <form class="header-searchbox">
                                    <input type="search" class="form-control" placeholder="Search">
                                    <button class="btn-submit" type="submit"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="header-middle-align-end">
                            <div class="header-action-area">
                                <div class="shopping-search">
                                    <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i class="pe-7s-search icon"></i></button>
                                </div>
                                <div class="shopping-wishlist">
                                    <a class="shopping-wishlist-btn" href="shop-wishlist.html">
                                        <i class="pe-7s-like icon"></i>
                                    </a>
                                </div>
                                <div class="shopping-cart">
                                    <button class="shopping-cart-btn" type="button">
                                        <a href="{{ route('product.viewCart') }}"><i class="pe-7s-shopbag icon"></i></a>
                                        <!-- <sup class="shop-count">03</sup> -->
                                    </button>
                                </div>
                                <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                                    <i class="pe-7s-menu"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area header-default">
        <div class="container">
            <div class="row no-gutter align-items-center position-relative">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-navigation-area position-relative">
                            <ul class="main-menu nav">
                                <li class="has-submenu"><a href="#/"><span>Home</span></a>
                                    <ul class="submenu-nav">
                                        <li><a href="index.html"><span>Home One</span></a></li>
                                        <li><a href="index-two.html"><span>Home Two</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html"><span>About</span></a></li>

                                <!-- Danh mục sản phẩm -->
                                <li class="has-submenu"><a href=""><span>Sản phẩm</span></a>
                                    <ul class="submenu-nav">
                                        
                                    </ul>
                                </li>
                                <!-- Danh mục sản phẩm -->

                                <li class="has-submenu position-static"><a href="#/"><span>Shop</span></a>
                                    <ul class="submenu-nav submenu-nav-mega column-3">
                                        <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Shop Layout</span></a>
                                            <ul>
                                                <li><a href="shop-three-columns.html"><span>Shop 3 Column</span></a></li>
                                                <li><a href="shop-four-columns.html"><span>Shop 4 Column</span></a></li>
                                                <li><a href="shop.html"><span>Shop Left Sidebar</span></a></li>
                                                <li><a href="shop-right-sidebar.html"><span>Shop Right Sidebar</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Single Product</span></a>
                                            <ul>
                                                <li><a href="single-normal-product.html"><span>Single Product Normal</span></a></li>
                                                <li><a href="single-product.html"><span>Single Product Variable</span></a></li>
                                                <li><a href="single-group-product.html"><span>Single Product Group</span></a></li>
                                                <li><a href="single-affiliate-product.html"><span>Single Product Affiliate</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Others Pages</span></a>
                                            <ul>
                                                <li><a href="shop-cart.html"><span>Shopping Cart</span></a></li>
                                                <li><a href="shop-checkout.html"><span>Checkout</span></a></li>
                                                <li><a href="shop-wishlist.html"><span>Wishlist</span></a></li>
                                                <li><a href="shop-compare.html"><span>Compare</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="#/"><span>Blog</span></a>
                                    <ul class="submenu-nav submenu-nav-mega">
                                        <li class="mega-menu-item"><a href="#/" class="mega-title">Blog Layout</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Grid</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item"><a href="#/" class="mega-title">Single Blog</a>
                                            <ul>
                                                <li><a href="blog-details-no-sidebar.html">Blog Details</a></li>
                                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"><span>Contact</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>