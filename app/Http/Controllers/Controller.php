<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

abstract class Controller
{
    public function show($id)
    {
        // Ambil data produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Kirim data ke view
        return view('product-detail', compact('product'));
    }
}
