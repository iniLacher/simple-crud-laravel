<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return response()->json($categories);
    }

    public function show($id){
        $category = Category::find($id);
        return response()->json($category);
    }

    public function store(Request $request){
        $category = Category::create($request->all());
        return response()->json($category);
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->update($request->all());
        return response()->json($category);
    }

    public function delete($id) {
        $category = Category::find($id);
        $category->delete();
        return response()->json($category);
    }
}
