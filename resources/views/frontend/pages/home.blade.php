
@extends('frontend.layout.template') @section('container')
@php
    use Illuminate\Support\Str;
@endphp
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
            <h3 class="new-product-title pull-left">Available Cars</h3>
            
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

                        @foreach( $cars as $car )
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

                                            <div class="tag sale"><span>OPEN</span></div>
                                        </div>
                                        

                                        <div class="product-info text-left">
                                            <h3 class="name bold">
                                               Owner: {{ $car->name }}
                                            </h3>
                                            <div class="">Brand: {{ Str::before($car->brand, ' ') }}</div>
                                            <div class="description">
                                                <span>Manufacture: {{ $car->year}}</span>
                                                <h6>Car Type: {{ $car->car_type }}</h6>
                                            </div>
                                            <div class="product-price">
                                              
                                                    <span class="price"> 
                                                        ৳{{ $car->daily_rent_price}}
                                                    </span>
                                                
                                            </div>
                                            <!-- /.product-price -->
                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <form action="{{route('rentals.show', $car->id)}}" method="POST">
                                                        
                                                            @csrf
                                                            @method('GET')

                                                            <input type="hidden" name="car_id" value="{{$car->id}}">

                                                            <button class="btn btn-primary icon" type="submit">
                                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                                            </button>
                                
                                                        </form>
                                                        
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
                        @endforeach

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
                    <div class="image"><img class="img-responsive" src="{{ asset('Backend/img/slider/bannerone.jpg') }}" alt="" /></div>
                </div>
                <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
                <div class="wide-banner cnt-strip">
                    <div class="image"><img class="img-responsive" src="{{ asset('Backend/img/slider/bannertwo.jpg') }}" alt="" style="height: 220px;"/></div>
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
    </section>
    <!-- /.section -->
    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->



    <!-- ============================================== WIDE PRODUCTS ============================================== -->
    <div class="wide-banners wow fadeInUp outer-bottom-xs">
        <div class="row">
            <div class="col-md-12">
                <div class="wide-banner cnt-strip">
                    <div class="image"><img class="img-responsive" src="{{ asset('Backend/img/slider/back-car.jpeg') }}" alt=""/></div>
                    <div class="strip strip-text">
                        <div class="strip-inner">
                            <h2 class="text-right">
                                Our New Collection<br />
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
    

    
    <!-- =============== FEATURED PRODUCTS =============== -->
    <section class="section wow fadeInUp new-arriavls">
        <h3 class="section-title">ALL Cars Arrivals</h3>
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

            @foreach( $allCars as $car )
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

                                
                                    @if( $car->availability == '1')
                                        <div class="tag sale">
                                            <span>OPEN</span>
                                        </div>
                                    @else
                                        <div class="tag" style="background-color: red;">
                                            <span>BOOK</span>
                                        </div>
                                    @endif
                            </div>
                            

                            <div class="product-info text-left">
                                <h3 class="name bold">
                                Owner: {{ $car->name }}
                                </h3>
                                <div class="">Brand: {{ Str::before($car->brand, ' ') }}</div>
                                <div class="description">
                                    <span>Manufacture: {{ $car->year}}</span>
                                    <h6>Car Type: {{ $car->car_type }}</h6>
                                </div>
                                
                                    @if( $car->availability == '1')
                                        <div class="form-group d-flex">
                                            <input type="date" name="start_date" id="" class="form-control">
                                            <input type="date" name="end_date" id="" class="form-control">
                                        </div>
                                    @endif

                                    <div class="product-price">
                                    
                                            <span class="price"> 
                                                ৳{{ $car->daily_rent_price}}
                                            </span>
                                        
                                    </div>
                               
                                <!-- /.product-price -->
                            </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">  
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                  

                                                    
                                                    @if( $car->availability == '1')
                                                        <button class="btn btn-primary icon" type="submit">
                                                            BOOK NOW
                                                        </button>
                                                    @else
                                                        <button class="btn btn-danger icon" type="submit" disabled>
                                                            BOOKED
                                                        </button>
                                                    @endif
                        
                                                
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
            @endforeach

               
        </div>
    </section>
    <!-- /.section -->
    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
</div>
<!-- /.homebanner-holder -->
<!-- ============================================== CONTENT : END ============================================== -->
@endsection