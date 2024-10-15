@extends('backend.layout.template')

@section('container')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Manage Cars</h4>
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
                                Manage All Cars
                            </h6>
                        </div>
                    </div>
                    <div class="pd-l-25 pd-r-15 pd-b-25">
                        <!-- Table Start Are here -->
                        <table class="table border table-bordered table-striped rounded">
                            <thead>
                                <tr>
                                    <th scope="col">#Sl.</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Brand Name</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Manufacture Year</th>
                                    <th scope="col">Car Type</th>
                                    <th scope="col">Daily Rent Price</th>
                                    <th scope="col">Available</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach( $cars as $car )
                                    <tr>
                                        <th scope="row">{{ $i }}</th>
                                        <td>
                                            @if( !is_null($car->image) )
                                                <img src="{{ asset('Backend/img/car') }}/{{$car->image}}" alt="" width="50px" height="50px"> 
                                            @else
                                                <span>No Thumbnail</span>
                                            @endif
                                        </td>
                                        <td>{{ $car->name }}</td>
                                        <td>{{ $car->brand }}</td>
                                        <td>{{ $car->model }}</td>
                                        <td>{{ $car->year }}</td>
                                        <td>{{ $car->car_type }}</td>
                                        <td>{{ $car->daily_rent_price }}</td>
                                        
                                        <td>
                                            @if( $car->availability == 0 )
                                                <span class="badge badge-danger">BOOK</span>
                                            @else
                                                <span class="badge badge-success">AVAILABLE</span>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="action-icons"> 
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('cars.edit', $car->id) }}" class="fa fa-edit"></a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="fa fa-trash" data-toggle="modal" data-target="#deleteCar{{ $car->id }}" ></a>
                                                    </li>
                                                </ul>
                                                <!-- Delete Modal Start Here -->
                                                <div class="modal fade" id="deleteCar{{ $car->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                Do you want to Delete the car ?
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('cars.destroy', $car->id ) }}" method="post">
                                                                @csrf
                                                                @method("DELETE")
                                                                <div class="action-icons">
                                                                    <ul>
                                                                        <li>
                                                                            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                                                                        </li>
                                                                        <li>
                                                                            <button type="button" class="btn btn-primary"  data-dismiss="modal">Close</button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <!-- Delete Modal End Here -->
                                            </div>
                                        </td>
                                    </tr>
                                @php $i++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Table End here -->
                    </div>
                </div>
                <!-- Body Content End -->
            </div>  
        </div>
    </div>
@endsection