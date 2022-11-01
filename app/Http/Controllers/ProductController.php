<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Show specific product.
     *
     * @param  int  $id
     * @return App\Models\Product;
     */
    public function show(int $id): Product
    {
        return Product::findOrFail($id);
    }
}
