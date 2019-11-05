<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StockController extends Controller
{
    /* RETRIEVE DE TOUTES LES ENTRÉES DANS LA DB */
    public function getAllProducts() {
        $product = Product::all();
        return view('stock', ['product'=> $product]);
    }
}
