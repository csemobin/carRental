<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ConformationMail;
use App\Models\Car;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RentalController extends Controller
{
    public function index()
    {
        $datas = Rental::all();
        return view('backend.pages.rental.manage', compact('datas'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $user = Auth::user()->id;
        $email = Auth::user()->email;
        $car_id = $request->input('car_id');
        
        // Fetch car details
        $car = Car::find($car_id);
        if (!$car) {
            return redirect()->back()->withErrors(['Car not found']);
        }
        
        $car_name = $car->name;

        $start = Carbon::parse($request->input('start_date'));
        $end = Carbon::parse($request->input('end_date'));

        // Calculate the difference in days
        $daysDifference = $start->diffInDays($end);
        $total_cost = $request->input('total_cost'); // Use a clearer variable name
        $paid = $total_cost*$daysDifference;

        // Create the rental
        Rental::create([
            'user_id' => $user,      
            'car_id' => $car_id,         
            'start_date' => $start,      
            'end_date' => $end,
            'total_cost' => $paid         
        ]);

        // Update car availability
        $car->update(['availability' => '0']);
        
        // Send emails
        Mail::to($email)->send(new ConformationMail($car_name, $total_cost, $start, $end));
        
        return redirect()->route('home');
    }

    public function show(string $id)
    {
        $datas = Rental::all();
        $item = Car::where('id', $id)->first();
        $cars = Car::orderBy('availability', 'desc')->get();

        return view('frontend.pages.details', compact('item', 'datas', 'cars'));
    }

    public function edit(string $id)
    {
        $id = Auth::id();
        $datas = Rental::where('user_id', $id)->get();
        return view('backend.pages.rental.usermanage', compact('datas'));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}