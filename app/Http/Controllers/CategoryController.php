<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public function index(): JsonResponse
    {
        $categories = Category::get();
        return response()->json($categories);
    }
    public function parents(): JsonResponse
    {
        $categories = Category::whereNull('parent_id')->get();
        return response()->json($categories);
    }
}
