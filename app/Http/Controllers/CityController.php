<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(): JsonResponse
    {
        $items = City::where('country_code', 'ru')->get();
        return response()->json($items);
    }
}
