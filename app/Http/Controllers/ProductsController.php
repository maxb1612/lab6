<?php


namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    public function getProductsMain() {
        $products = DB::table('products')->get();
        return view('index', ['products' => $products]);
    }

    public function getProductsCategory() {
        $products = DB::table('products')->get();
        return view('category', ['products' => $products]);
    }

}
