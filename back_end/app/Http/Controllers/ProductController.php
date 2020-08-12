<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    protected $product;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        return $this->product->all();
    }

    public function store(Request $request)
    {
        // Validate if the input for each field is correct 
        $this->validate($request, [
            'name' => 'required|string|unique',
            'description' => 'required|string',
            'image' => 'string',
            'value' => 'required|numeric'
           ]);

        $this->product->create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'value' => $request->value
        ]);
    }
}
