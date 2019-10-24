<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class BoutiqueController extends Controller
{
    /* RETRIEVE DE TOUTES LES ENTRÉES DANS LA DB */
    public function getAllProducts() {
        $product = Product::all();
        return view('welcome',['product'=> $product]);
    }
}
