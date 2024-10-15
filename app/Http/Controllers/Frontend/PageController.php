<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home(){
        $allCars = Car::all();
        $cars = Car::where('availability', 1)->get();
        $datas = Car::where('availability', true)
        ->select('brand', DB::raw('COUNT(*) as total'))
        ->groupBy('brand')
        ->get();

        return view('frontend.pages.home', compact('datas','cars','allCars'));
    }
}
