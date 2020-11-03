<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'image',
        'value'    
    ];


    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}