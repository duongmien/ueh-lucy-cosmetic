<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m1 = DB::table('tbl_product')->where('product_price', '<', 100000)->count();
        $m2 = DB::table('tbl_product')->where('product_price', '>', 100000)->where('product_price', '<', 150000)->count();
        $m3 = DB::table('tbl_product')->where('product_price', '>', 150000)->where('product_price', '<', 200000)->count();
        $m4 = DB::table('tbl_product')->where('product_price', '>', 200000)->where('product_price', '<', 500000)->count();
        $m5 = DB::table('tbl_product')->where('product_price', '>', 500000)->count();
        Session::put('m1', $m1);
        Session::put('m2', $m2);
        Session::put('m3', $m3);
        Session::put('m4', $m4);
        Session::put('m5', $m5);

        $category_product = DB::table('tbl_product_category')->get();
        $list_product_category = DB::table('tbl_product')->where('category_id', 1)->get();
        $category = DB::table('tbl_product_category')->where('category_id', 1)->get();
        return view('category')->with('product', $list_product_category)->with('category_product', $category_product)->with('category', $category);
    }
    public function show_product_category($category_id)
    {
        $m1 = DB::table('tbl_product')->where('product_price', '<', 100000)->count();
        $m2 = DB::table('tbl_product')->where('product_price', '>', 100000)->where('product_price', '<', 150000)->count();
        $m3 = DB::table('tbl_product')->where('product_price', '>', 150000)->where('product_price', '<', 200000)->count();
        $m4 = DB::table('tbl_product')->where('product_price', '>', 200000)->where('product_price', '<', 500000)->count();
        $m5 = DB::table('tbl_product')->where('product_price', '>', 500000)->count();
        Session::put('m1', $m1);
        Session::put('m2', $m2);
        Session::put('m3', $m3);
        Session::put('m4', $m4);
        Session::put('m5', $m5);
        $list_product_category = DB::table('tbl_product')->where('category_id', $category_id)->get();
        $category_product = DB::table('tbl_product_category')->get();
        $category = DB::table('tbl_product_category')->where('category_id', $category_id)->get();
        return view('category')->with('product', $list_product_category)->with('category_product', $category_product)->with('category', $category);
    }

    public function price_filter(Request $request)
    {
        $m1 = DB::table('tbl_product')->where('product_price', '<', 100000)->count();
        $m2 = DB::table('tbl_product')->where('product_price', '>', 100000)->where('product_price', '<', 150000)->count();
        $m3 = DB::table('tbl_product')->where('product_price', '>', 150000)->where('product_price', '<', 200000)->count();
        $m4 = DB::table('tbl_product')->where('product_price', '>', 200000)->where('product_price', '<', 500000)->count();
        $m5 = DB::table('tbl_product')->where('product_price', '>', 500000)->count();
        Session::put('m1', $m1);
        Session::put('m2', $m2);
        Session::put('m3', $m3);
        Session::put('m4', $m4);
        Session::put('m5', $m5);
        $category = DB::table('tbl_product_category')->where('category_id', 1)->get();

        $re = DB::table('tbl_product')->orderBy('product_sold', 'desc')->get();
        $m = $request->price;
        switch ($m) {
            case 'm1':
                $re = DB::table('tbl_product')->where('product_price', '<', 100000)->get();
                $category[0]->category_name = "Sản phẩm trong khoảng giá 0đ - 100.000đ";
                break;
            case 'm2':
                $re = DB::table('tbl_product')->where('product_price', '>', 100000)->where('product_price', '<', 150000)->get();
                $category[0]->category_name = "Sản phẩm trong khoảng giá 100.000đ - 150.000đ";
                break;
            case 'm3':
                $re = DB::table('tbl_product')->where('product_price', '>', 150000)->where('product_price', '<', 200000)->get();
                $category[0]->category_name = "Sản phẩm trong khoảng giá 150.000đ - 200.000đ";
                break;
            case 'm4':
                $re = DB::table('tbl_product')->where('product_price', '>', 200000)->where('product_price', '<', 500000)->get();
                $category[0]->category_name = "Sản phẩm trong khoảng giá 200.000đ - 500.000đ";
                break;
            case 'm5':
                $re = DB::table('tbl_product')->where('product_price', '>', 500000)->get();
                $category[0]->category_name = "Sản phẩm trong khoảng giá > 500.000đ";
                break;
        }
        $category_product = DB::table('tbl_product_category')->get();
        return view('category')->with('product', $re)->with('category_product', $category_product)->with('category', $category);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
