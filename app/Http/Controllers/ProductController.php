<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $category_product = DB::table('tbl_product_category')->get();

        return view('product_detail')->with('category_product', $category_product);
    }
    public function detail($product_id)
    {
        $category_product = DB::table('tbl_product_category')->get();
        $product = DB::table('tbl_product')->where('Product_id', $product_id)->limit(1)->get();
        return view('product_detail')->with('category_product', $category_product)->with('product', $product);
    }
}
