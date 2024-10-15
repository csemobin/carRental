@extends('backend.layout.template')

@section('container')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Create Car</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
    </div>
    
    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12 col-xl-12">
                <!-- Body Content Start -->
                <div class="card bd-0 shadow-base">
                    <div class="d-md-flex justify-content-between pd-25">
                        <div>
                            <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">
                                Create New Car
                            </h6>
                        </div>
                    </div>
                    <div class="pd-l-25 pd-r-15 pd-b-25">
                        <!-- Car Form are here -->
                        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("POST")

                            <div class="form-group">
                                <label for="name">Car Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="brand">Car Brand Name</label>
                                <input type="text" name="brand" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="model">Car Model</label>
                                <input type="text" name="model" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="year">Car Manufacture Year</label>
                                <input type="integer" name="year" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="car_type">Car Type</label>
                                <input type="text" name="car_type" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="daily_rent_price">Daily Rantel Price</label>
                                <input type="integer" name="daily_rent_price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="availability">Availability</label>
                                <select name="availability" id="" class="form-control">
                                    <option value="0">Please Select the Availability Status</option>
                                    <option value="1">Yes, Availability</option>
                                    <option value="0">Not, Booked</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="Image">Car Image / Logo</label>
                                <input type="file" name="image" class="form-control-file" accept="image/png, image/jpeg">
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" name="addCar" class="btn btn-primary" value="add new car">
                            </div>
                        </form>

                    </div>
                </div>
                <!-- Body Content End -->
            </div>  
        </div>
    </div>
@endsection