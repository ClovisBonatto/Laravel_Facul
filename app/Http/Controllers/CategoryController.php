<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('app.categories.index', compact('categories'));
    }

    public function create(){
        return view('app.categories.create');
    }

    public function store(Request $request){
        $data = $request->all();

        Category::create($data);

        return redirect()->route('categories.index');
    }
}
