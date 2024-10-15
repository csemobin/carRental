@extends('frontend.layout.template') @section('container')
<!-- ============================================== CONTENT ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
    <!-- ============= SECTION – HERO ============ -->

    <div id="hero">
        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
           
            <div class="item" style="background-image: url('Backend/img/slider/bannerone.jpg')">
            </div>
            <div class="item" style="background-image: url('Backend/img/slider/bannertwo.jpg')">
            </div>
            <div class="item" style="background-image: url('Backend/img/slider/bannerone.jpg')">
            </div>
            

            <!-- /.item -->
        </div>
        <!-- /.owl-carousel -->
    </div>

    <!-- ====== SECTION – HERO : END ============== -->

    <!-- =========== INFO BOXES ==================== -->
    <div class="info-boxes wow fadeInUp">
        <div class="info-boxes-inner">
            <div class="row">
                <div class="col-md-6 col-sm-4 col-lg-4">
                    <div class="info-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="info-box-heading green">money back</h4>
                            </div>
                        </div>
                        <h6 class="text">30 Days Money Back Guarantee</h6>
                    </div>
                </div>
                <!-- .col -->

                <div class="hidden-md col-sm-4 col-lg-4">
                    <div class="info-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="info-box-heading green">free shipping</h4>
                            </div>
                        </div>
                        <h6 class="text">Shipping on orders over $99</h6>
                    </div>
                </div>
                <!-- .col -->

                <div class="col-md-6 col-sm-4 col-lg-4">
                    <div class="info-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="info-box-heading green">Special Sale</h4>
                            </div>
                        </div>
                        <h6 class="text">Extra $5 off on all items</h6>
                    </div>
                </div>
                <!-- .col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.info-boxes-inner -->
    </div>
    <!-- /.info-boxes -->
    <!-- ================== INFO BOXES : END ================== -->


    <!-- ================== SCROLL TABS ================== -->
    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
        <div class="more-info-tab clearfix">
            <h3 class="new-product-title pull-left">New Products</h3>
            
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                
                <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                
                <!-- There are Dynamic Tabs here -->
               <li>
                    <a data-transition-type="backSlide" href="#" data-toggle="tab"></a>
                </li>

            </ul>

            <!-- /.nav-tabs -->
        </div>
        
        <div class="tab-content outer-top-xs">

            <!-- All Items Start-->

            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme"> 

                    
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="">
                                                @if( 1 )
                                                <img src="{{ asset('Backend/img/product/default.png' ) }}" alt="" />
                                                @else
                                                <img src="{{ asset('Backend/img/product/default.png') }}" alt="" />
                                                @endif
                                            </a>
                                        </div>
                                        <!-- /.image -->

                                        @if( 1 )
                                        <div class="tag sale"><span>Sale</span></div>
                                        @else 
                                            @if( 1 )
                                            <div class="tag new"><span>new</span></div>
                                            @elseif( 1 )
                                            <div class="tag hot"><span>Old</span></div>
                                            @endif 
                                        @endif
                                    </div>
                                    

                                    <div class="product-info text-left">
                                        <h3 class="name">
                                            <a href="#">
                                               title
                                            </a>
                                        </h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price">
                                            @if( 1 )
                                                <span class="price"> 
                                                    ৳ 1 
                                                </span>
                                                <span class="price-before-discount">
                                                    ৳ 1
                                                </span>
                                            @else
                                                <span class="price"> 
                                                    ৳ 1 
                                                </span>
                                            @endif
                                        </div>
                                        <!-- /.product-price -->
                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <form action="#" method="POST">
                                                        @csrf

                                                            <input type="hidden" name="product_id" value="# ">
                                                           
                                                            <input type="hidden" name="product_quantity" value="1">

                                                            <button class="btn btn-primary icon" type="submit">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </button>
                                                           
                                                            <!-- <button class="btn btn-primary cart-btn" type="button">
                                                                Add to cart
                                                            </button> -->
                            
                                                    </form>
                                                    
                                                </li>
                                                <li class="lnk wishlist">
                                                    <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a>
                                                </li>
                                                <li class="lnk">
                                                    <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->
                            </div>
                            <!-- /.products -->
                        </div>

                  </div>
                </div>
            </div>
            <!-- All Items End-->
            

        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.scroll-tabs -->
    <!-- ============================================== SCROLL TABS : END ============================================== -->


    <!-- ============================================== WIDE PRODUCTS ============================================== -->
    <div class="wide-banners wow fadeInUp outer-bottom-xs">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <div class="wide-banner cnt-strip">
                    <div class="image"><img class="img-responsive" src="{{ asset('frontend\assets\images\banners\home-banner1.jpg') }}" alt="" /></div>
                </div>
                <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
                <div class="wide-banner cnt-strip">
                    <div class="image"><img class="img-responsive" src="{{ asset('frontend\assets\images\banners\home-banner2.jpg') }}" alt="" /></div>
                </div>
                <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.wide-banners -->

    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->


    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
    <section class="section featured-product wow fadeInUp">
        <h3 class="section-title">Featured products</h3>
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

         fgdfgd

        </div>
        <!-- /.home-owl-carousel -->
    </section>
    <!-- /.section -->
    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->



    <!-- ============================================== WIDE PRODUCTS ============================================== -->
    <div class="wide-banners wow fadeInUp outer-bottom-xs">
        <div class="row">
            <div class="col-md-12">
                <div class="wide-banner cnt-strip">
                    <div class="image"><img class="img-responsive" src="{{ asset('frontend\assets\images\banners\home-banner.jpg') }}" alt="" /></div>
                    <div class="strip strip-text">
                        <div class="strip-inner">
                            <h2 class="text-right">
                                New Mens Fashion<br />
                                <span class="shopping-needs">Save up to 40% off</span>
                            </h2>
                        </div>
                    </div>
                    <div class="new-label">
                        <div class="text">NEW</div>
                    </div>
                    <!-- /.new-label -->
                </div>
                <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.wide-banners -->
    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
    <!-- ============================================== BEST SELLER ============================================== -->

    <div class="best-deal wow fadeInUp outer-bottom-xs">
        <h3 class="section-title">Best seller</h3>
        <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                <div class="item">
                    <div class="products best-product">
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="#"> <img src="{{ asset('frontend\assets\images\products\p20.jpg') }}" alt="" /> </a>
                                            </div>
                                            <!-- /.image -->
                                        </div>
                                        
                                    </div>
                                    <!-- /.col -->
                                    <div class="col2 col-xs-7">
                                        <div class="product-info">
                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span></div>
                                            <!-- /.product-price -->
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.product-micro-row -->
                            </div>
                            <!-- /.product-micro -->
                        </div>
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="#"> <img src="{{ asset('frontend\assets\images\products\p21.jpg') }}" alt="" /> </a>
                                            </div>
                                            <!-- /.image -->
                                        </div>
                                        
                                    </div>
                                    <!-- /.col -->
                                    <div class="col2 col-xs-7">
                                        <div class="product-info">
                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span></div>
                                            <!-- /.product-price -->
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.product-micro-row -->
                            </div>
                            <!-- /.product-micro -->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="products best-product">
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="#"> <img src="{{ asset('frontend\assets\images\products\p22.jpg') }}" alt="" /> </a>
                                            </div>
                                            <!-- /.image -->
                                        </div>
                                        
                                    </div>
                                    <!-- /.col -->
                                    <div class="col2 col-xs-7">
                                        <div class="product-info">
                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span></div>
                                            <!-- /.product-price -->
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.product-micro-row -->
                            </div>
                            <!-- /.product-micro -->
                        </div>
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="#"> <img src="{{ asset('frontend\assets\images\products\p23.jpg') }}" alt="" /> </a>
                                            </div>
                                            <!-- /.image -->
                                        </div>
                                        
                                    </div>
                                    <!-- /.col -->
                                    <div class="col2 col-xs-7">
                                        <div class="product-info">
                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span></div>
                                            <!-- /.product-price -->
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.product-micro-row -->
                            </div>
                            <!-- /.product-micro -->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="products best-product">
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="#"> <img src="{{ asset('frontend\assets\images\products\p24.jpg') }}" alt="" /> </a>
                                            </div>
                                            <!-- /.image -->
                                        </div>
                                        
                                    </div>
                                    <!-- /.col -->
                                    <div class="col2 col-xs-7">
                                        <div class="product-info">
                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span></div>
                                            <!-- /.product-price -->
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.product-micro-row -->
                            </div>
                            <!-- /.product-micro -->
                        </div>
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="#"> <img src="{{ asset('frontend\assets\images\products\p25.jpg') }}" alt="" /> </a>
                                            </div>
                                            <!-- /.image -->
                                        </div>
                                        
                                    </div>
                                    <!-- /.col -->
                                    <div class="col2 col-xs-7">
                                        <div class="product-info">
                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span></div>
                                            <!-- /.product-price -->
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.product-micro-row -->
                            </div>
                            <!-- /.product-micro -->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="products best-product">
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="#"> <img src="{{ asset('frontend\assets\images\products\p26.jpg') }}" alt="" /> </a>
                                            </div>
                                            <!-- /.image -->
                                        </div>
                                        
                                    </div>
                                    <!-- /.col -->
                                    <div class="col2 col-xs-7">
                                        <div class="product-info">
                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span></div>
                                            <!-- /.product-price -->
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.product-micro-row -->
                            </div>
                            <!-- /.product-micro -->
                        </div>
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="#"> <img src="{{ asset('frontend\assets\images\products\p27.jpg') }}" alt="" /> </a>
                                            </div>
                                            <!-- /.image -->
                                        </div>
                                        
                                    </div>
                                    <!-- /.col -->
                                    <div class="col2 col-xs-7">
                                        <div class="product-info">
                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span></div>
                                            <!-- /.product-price -->
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.product-micro-row -->
                            </div>
                            <!-- /.product-micro -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.sidebar-widget-body -->
    </div>
    <!-- /.sidebar-widget -->
    <!-- ============================================== BEST SELLER : END ============================================== -->

    
    <!-- =============== FEATURED PRODUCTS =============== -->
    <section class="section wow fadeInUp new-arriavls">
        <h3 class="section-title">New Arrivals</h3>
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
          gdfgdfgfd
        </div>
    </section>
    <!-- /.section -->
    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
</div>
<!-- /.homebanner-holder -->
<!-- ============================================== CONTENT : END ============================================== -->
@endsection