<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;

use Illuminate\Http\Request;

class CarController extends Controller {

    public function index($id)
    {
        $brand = Brand::query()->findOrFail($id);

        return view('showroom', ['cars' => $brand->cars]);

    }

    public function show(Car $car)
    {

        return view('details', ['car' => $car]);

    }

}