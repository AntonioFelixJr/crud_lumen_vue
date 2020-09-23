<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{

    protected $category;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $data = [];

        $categories = $this->category->all();

        foreach ($categories as $category) {

            array_push($data, [
                'id' => $category->id,
                'name' => $category->name,
                'total' => $category->products->count()
            ]);
        }

        return $data;
    }

    public function store(Request $request)
    {
        // Validate if the input for each field is correct 
        $this->validate($request, [
            'name' => 'required|string|unique',
            'description' => 'string'
           ]);

        $this->category->create([
            'name' => $request->name,
            'description' => $request->description
        ]);
    }
}
