<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
class CarController extends Controller
{
    public function index()
{
    $cars = Car::all();
    return view('backend.pages.car.manage', compact('cars'));
}

public function create()
{
    return view('backend.pages.car.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'brand' => 'required|string',
        'model' => 'required|string',
        'year' => 'required|integer',
        'car_type' => 'required|string',
        'daily_rent_price' => 'required|numeric',
        'availability' => 'required|boolean',
        'image' => 'required|image',
    ]);

    $data['image'] = $request->file('image')->store('images', 'public');

    Car::create($data);

    return redirect()->route('cars.index');
}

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::find($id);
        return view('backend.pages.car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'car_type' => 'required|string',
            'daily_rent_price' => 'required|numeric',
            'availability' => 'required|boolean',
            'image' => 'required|image',
        ]);
    
        $data['image'] = $request->file('image')->store('images', 'public');
    
        Car::where('id', $id)->update([
            'name' => $data['name'],
            'brand' => $data['brand'],
            'model' => $data['model'],
            'year' => $data['year'],
            'car_type' => $data['car_type'],
            'daily_rent_price' => $data['daily_rent_price'],
            'availability' => $data['availability'],
            'image' => $data['image'],
        ]);
    
        return redirect()->route('cars.index');
    }    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::find($id)->delete();
        return redirect()->route('cars.index');
    }
}
