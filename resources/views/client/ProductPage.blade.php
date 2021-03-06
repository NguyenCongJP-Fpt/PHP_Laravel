@extends('client.layout.master')
@section('content')
    <div id="header">
        <div class="header-top">
            <div class="container">
                <div class="pull-left auto-width-left">
                    <ul class="top-menu menu-beta l-inline">
                        <li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
                        <li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
                    </ul>
                </div>
                <div class="pull-right auto-width-right">
                    <ul class="top-details menu-beta l-inline">
                        <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
                        <li><a href="#">Đăng kí</a></li>
                        <li><a href="#">Đăng nhập</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-top -->
        <div class="header-body">
            <div class="container beta-relative">
                <div class="pull-left">
                    <a href="source/index.html" id="logo"><img src="source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
                </div>
                <div class="pull-right beta-components space-left ov">
                    <div class="space10">&nbsp;</div>
                    <div class="beta-comp">
                        <form role="search" method="get" id="searchform" action="/">
                            <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..."/>
                            <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                        </form>
                    </div>

                    <div class="beta-comp">
                        <div class="cart">
                            <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i
                                        class="fa fa-chevron-down"></i></div>
                            <div class="beta-dropdown cart-body">
                                <div class="cart-item">
                                    <div class="media">
                                        <a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/1.png"
                                                                           alt=""></a>
                                        <div class="media-body">
                                            <span class="cart-item-title">Sample Woman Top</span>
                                            <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                            <span class="cart-item-amount">1*<span>$49.50</span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-item">
                                    <div class="media">
                                        <a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/2.png"
                                                                           alt=""></a>
                                        <div class="media-body">
                                            <span class="cart-item-title">Sample Woman Top</span>
                                            <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                            <span class="cart-item-amount">1*<span>$49.50</span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-item">
                                    <div class="media">
                                        <a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/3.png"
                                                                           alt=""></a>
                                        <div class="media-body">
                                            <span class="cart-item-title">Sample Woman Top</span>
                                            <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                            <span class="cart-item-amount">1*<span>$49.50</span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-caption">
                                    <div class="cart-total text-right">Tổng tiền: <span
                                                class="cart-total-value">$34.55</span></div>
                                    <div class="clearfix"></div>

                                    <div class="center">
                                        <div class="space10">&nbsp;</div>
                                        <a href="source/checkout.html" class="beta-btn primary text-center">Đặt hàng <i
                                                    class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .cart -->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-body -->
        <div class="header-bottom color-div">
            <div class="container">
                <a class="visible-xs beta-menu-toggle pull-right" href="#"><span
                            class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
                <div class="visible-xs clearfix"></div>
                <nav class="main-menu">
                    <ul class="l-inline ov">
                        <li><a href="source/index.html">Trang chủ</a></li>
                        <li><a href="#">Sản phẩm</a>
                            <ul class="sub-menu">
                                <li><a href="source/product_type.html">Sản phẩm 1</a></li>
                                <li><a href="source/product_type.html">Sản phẩm 2</a></li>
                                <li><a href="source/product_type.html">Sản phẩm 4</a></li>
                            </ul>
                        </li>
                        <li><a href="source/about.html">Giới thiệu</a></li>
                        <li><a href="source/contacts.html">Liên hệ</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div> <!-- .container -->
        </div> <!-- .header-bottom -->
    </div> <!-- #header -->
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Sản phẩm</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="index.html">Home</a> / <span>Sản phẩm</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="aside-menu">
                            <li><a href="#">Typography</a></li>
                            <li><a href="#">Buttons</a></li>
                            <li><a href="#">Dividers</a></li>
                            <li><a href="#">Columns</a></li>
                            <li><a href="#">Icon box</a></li>
                            <li><a href="#">Notifications</a></li>
                            <li><a href="#">Progress bars and Skill meter</a></li>
                            <li><a href="#">Tabs</a></li>
                            <li><a href="#">Testimonial</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">Social icons</a></li>
                            <li><a href="#">Carousel sliders</a></li>
                            <li><a href="#">Custom List</a></li>
                            <li><a href="#">Image frames &amp; gallery</a></li>
                            <li><a href="#">Google Maps</a></li>
                            <li><a href="#">Accordion and Toggles</a></li>
                            <li class="is-active"><a href="#">Custom callout box</a></li>
                            <li><a href="#">Page section</a></li>
                            <li><a href="#">Mini callout box</a></li>
                            <li><a href="#">Content box</a></li>
                            <li><a href="#">Computer sliders</a></li>
                            <li><a href="#">Pricing &amp; Data tables</a></li>
                            <li><a href="#">Process Builders</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            <h4>New Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">438 styles found</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="source/product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">Sample Woman Top</p>
                                            <p class="single-item-price">
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="source/shopping_cart.html"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="source/product.html">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="source/product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">Sample Woman Top</p>
                                            <p class="single-item-price">
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="source/shopping_cart.html"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="source/product.html">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="source/product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">Sample Woman Top</p>
                                            <p class="single-item-price">
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="source/shopping_cart.html"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="source/product.html">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>

                        <div class="beta-products-list">
                            <h4>Top Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">438 styles found</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="source/product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">Sample Woman Top</p>
                                            <p class="single-item-price">
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="source/shopping_cart.html"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="source/product.html">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="source/product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">Sample Woman Top</p>
                                            <p class="single-item-price">
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="source/shopping_cart.html"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="source/product.html">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="source/product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">Sample Woman Top</p>
                                            <p class="single-item-price">
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="source/shopping_cart.html"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="source/product.html">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space40">&nbsp;</div>

                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection