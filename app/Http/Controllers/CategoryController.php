<?php

namespace App\Http\Controllers;
use app\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function index(Request $request)
    {
        if ($request->search) {
            $categories = DB::table('categories')
            ->where('id', 'LIKE', "%$request->search%")
            ->get();

            return $categories;
        }

        $categories = Category::all();
        return $categories;
    }
}
