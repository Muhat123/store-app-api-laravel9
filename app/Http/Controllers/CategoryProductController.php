<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index()
    {
        return CategoryProduct::all();
    }

    public function show($id)
    {
        return CategoryProduct::findOrFail($id);
    }

    public function store(Request $request)
    {
        return CategoryProduct::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $category = CategoryProduct::findOrFail($id);
        $category->update($request->all());

        return $category;
    }

    public function destroy($id)
    {
        CategoryProduct::destroy($id);
        return response()->json(null, 204);
    }
}

