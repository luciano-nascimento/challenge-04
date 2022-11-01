<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    
    /**
     * Show specific product.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return Product::findOrFail($id);
    }
}
