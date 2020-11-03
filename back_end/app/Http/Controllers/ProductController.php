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
        $data = [];
        $products = $this->product->all();

        foreach ($products as $product) {
            array_push($data, [
                'name' => $product->name,
                'value' => $product->value,
                'category' =>  $product->category->name
            ]);
        }

        return $data;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:products',
            'description' => 'required|string',
            'image' => 'file|size:512',
            'category_id' => 'required|integer',
            'value' => 'required|numeric'
           ]);

        $this->product->create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image' => $request->image,
            'value' => $request->value
        ]);
    }
}
