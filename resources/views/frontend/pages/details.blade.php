@extends('frontend.layout.template') 
@section('container')

<!-- ============================================== CONTENT ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Car</a></li>
                    <li><a href="#">Brand</a></li>
                    <li class='active'>{{ $item->brand }}</li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>
                <div class='col-md-9'>
                    <div class="detail-block">
                        <div class="row  wow fadeInUp">

                            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                <div class="product-item-holder size-big single-product-gallery small-gallery">

                                    <div id="owl-single-product">
                                        <div class="single-product-gallery-item" id="slide1">
                                            <a data-lightbox="image-1" data-title="Gallery" href="{{asset('Frontend/assets/images/default.webp')}}">
                                                <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="{{asset('Frontend/assets/images/default.webp')}}" />
                                            </a>
                                        </div>

                                    </div>
                                    <!-- /.single-product-slider -->

                                </div>
                                <!-- /.single-product-gallery -->
                            </div>
                            <!-- /.gallery-holder -->
                            <div class='col-sm-6 col-md-7 product-info-block'>
                                <div class="product-info">
                                    <h1 class="name">{{$item->name}}</h1>

                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                 BRAND :  {{ $item->brand }}
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="reviews">
                                                TYPE :  {{ $item->car_type }}
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-sm-6">
                                                MODEL :  {{ $item->model }}
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="reviews">
                                                  Year :  {{ $item->year }}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.rating-reviews -->

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                            
                                            <div class="col-sm-9">
                                                <div class="stock-box">
                                                    <span class="value">
                                                        @if( $item->availability == true )
                                                            <span class="badge badge-success">Availabile</span>
                                                        @else
                                                            <span class="label label-danger">
                                                                Already Booked
                                                                @php
                                                                    $startDates = \App\Models\Rental::where('car_id', $item->id)->pluck('start_date');
                                                                    $endDates = \App\Models\Rental::where('car_id', $item->id)->pluck('end_date');
                                                                @endphp

                                                                @foreach($startDates as $index => $startDate)
                                                                    <p>Start Date: {{ $startDate }}</p>
                                                                    <p>End Date: {{ $endDates[$index] }}</p>
                                                                @endforeach


                                                            </span>
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.stock-container -->
                                    

                                    <div class="description-container m-t-20">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                    <!-- /.description-container -->
                                    <form action="{{route('rentals.store')}}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="car_id" value="{{$item->id}}">
                                        <input type="hidden" name="total_cost" value="{{$item->daily_rent_price }}">

                                        <div class="price-container info-container m-t-20">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="start_date">Start Date</label>
                                                        <input type="date" class="form-control" name="start_date">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="end_date">End Date</label>
                                                        <input type="date" class="form-control" name="end_date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="price-box">
                                                        <span class="price">${{ $item->daily_rent_price}}</span>
                                                        <!-- <span class="price-strike">$900.00</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>

                                        <div class="quantity-container info-container">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                @if( $item->availability == 1 )
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="fa fa-shopping-cart inner-right-vs"></i>BOOKED NOW
                                                        </button>
                                                    @else
                                                        <button type="submit" class="btn btn-danger" disabled>
                                                            <i class="fa fa-shopping-cart inner-right-vs"></i>Already BOOKED
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                    </form>
                                    <!-- /.quantity-container -->






                                </div>
                                <!-- /.product-info -->
                            </div>
                            <!-- /.col-sm-7 -->
                        </div>
                        <!-- /.row -->
                    </div>

                    <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                    <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                                    <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                                </ul>
                                <!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-9">

                                <div class="tab-content">

                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                <br>
                                                <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                                laborum.</p>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div id="review" class="tab-pane">
                                        <div class="product-tab">

                                            <div class="product-reviews">
                                                <h4 class="title">Customer Reviews</h4>

                                                <div class="reviews">
                                                    <div class="review">
                                                        <div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span>
                                                        </div>
                                                        <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit."</div>
                                                    </div>

                                                </div>
                                                <!-- /.reviews -->
                                            </div>
                                            <!-- /.product-reviews -->



                                            <div class="product-add-review">
                                                <h4 class="title">Write your own review</h4>
                                                <div class="review-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="cell-label">&nbsp;</th>
                                                                    <th>1 star</th>
                                                                    <th>2 stars</th>
                                                                    <th>3 stars</th>
                                                                    <th>4 stars</th>
                                                                    <th>5 stars</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="cell-label">Quality</td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="1">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="2">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="3">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="4">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="5">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Price</td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="1">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="2">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="3">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="4">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="5">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Value</td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="1">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="2">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="3">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="4">
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" name="quality" class="radio" value="5">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- /.table .table-bordered -->
                                                    </div>
                                                    <!-- /.table-responsive -->
                                                </div>
                                                <!-- /.review-table -->

                                                <div class="review-form">
                                                    <div class="form-container">
                                                        <form role="form" class="cnt-form">

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                                        <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                            </div>
                                                            <!-- /.row -->

                                                            <div class="action text-right">
                                                                <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                                                            </div>
                                                            <!-- /.action -->

                                                        </form>
                                                        <!-- /.cnt-form -->
                                                    </div>
                                                    <!-- /.form-container -->
                                                </div>
                                                <!-- /.review-form -->

                                            </div>
                                            <!-- /.product-add-review -->

                                        </div>
                                        <!-- /.product-tab -->
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div id="tags" class="tab-pane">
                                        <div class="product-tag">

                                            <h4 class="title">Product Tags</h4>
                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-container">

                                                    <div class="form-group">
                                                        <label for="exampleInputTag">Add Your Tags: </label>
                                                        <input type="email" id="exampleInputTag" class="form-control txt">


                                                    </div>

                                                    <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                                                </div>
                                                <!-- /.form-container -->
                                            </form>
                                            <!-- /.form-cnt -->

                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                                </div>
                                            </form>
                                            <!-- /.form-cnt -->

                                        </div>
                                        <!-- /.product-tab -->
                                    </div>
                                    <!-- /.tab-pane -->

                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.product-tabs -->

                    <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">upsell products</h3>
                        <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                        
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
                        <!-- /.home-owl-carousel -->
                    </section>
                    <!-- /.section -->
                    <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

                </div>
                <!-- /.col -->
                <div class="clearfix"></div>
            </div>
            <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
           
            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.body-content -->

</div>
<!-- /.homebanner-holder -->
<!-- ============================================== CONTENT : END ============================================== -->
@endsection