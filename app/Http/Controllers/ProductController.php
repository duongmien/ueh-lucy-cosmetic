<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $category_product = DB::table('tbl_product_category')->get();

        return view('product_detail')->with('category_product',$category_product);
    }
}

