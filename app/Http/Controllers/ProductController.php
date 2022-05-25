<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    // Code hiển thị sản phẩm trên trang chi tiết sản phẩm
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
    // Code tìm kiếm sản phẩm
    public function search(Request $request)
    {
        $category_product = DB::table('tbl_product_category')->get();
        $key = $request->keywords;
        $list_product_category = DB::table('tbl_product')->where('product_name','like','%'.$key.'%')->orderBy('product_sold','desc')->get();
        $category = DB::table('tbl_product_category')->where('category_id',1)->get();
        $category[0]->category_name = "Kết quả tìm kiếm";
        return view('category')->with('product',$list_product_category)->with('category_product',$category_product)->with('category',$category);
    }
}
