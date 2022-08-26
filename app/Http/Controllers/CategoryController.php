<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(Request $request) {
        $categories = Category::orderBy('category_id')->get();
        return view('categories.index', [
            'categories' => $categories
        ]);
    }

    public function add(Request $request) {

        if ($request->method() == "GET") {
            return view('categories.add',[
                'category_id' => $request->get('category_id') with 
            ]);
        }

        $data = $request->only(['name', 'description','category_id']);

        $validator = Validator::make($data, [
            'name'=>'string|required'
        ]);

        $category = Category::create($data);

        return redirect('categories');
    }
}
