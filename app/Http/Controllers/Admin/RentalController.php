<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Rental::all();
        return view('backend.pages.rental.manage', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id;
        $car_id = $request->input('car_id');
        $start = Carbon::parse($request->input('start_date'));
        $end = Carbon::parse($request->input('end_date'));

        // Calculate the difference in days
        $daysDifference = $start->diffInDays($end);
        $daily_price = $request->input('total_cost');
        $total_cost = $daily_price*$daysDifference;

        Rental::create([
            'user_id' => $user,      
            'car_id' => $car_id,         
            'start_date' => $start,      
            'end_date' => $end,
            'total_cost' => $total_cost         
        ]);
        Car::where('id', $car_id)->update(['availability'=>'0']);
        return redirect()->route('home');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = Auth::id();
        $datas = Rental::where('user_id', $id)->get();
        return view('backend.pages.rental.usermanage', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
