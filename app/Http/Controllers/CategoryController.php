<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_product = DB::table('tbl_product_category')->get();
        $list_product_category = DB::table('tbl_product')->where('category_id',1)->get();
        $category = DB::table('tbl_product_category')->where('category_id',1)->get();
        return view('category')->with('product',$list_product_category)->with('category_product',$category_product)->with('category',$category);
    }
    public function show_product_category($category_id){
        $list_product_category = DB::table('tbl_product')->where('category_id',$category_id)->get();
        $category_product = DB::table('tbl_product_category')->get();
        $category = DB::table('tbl_product_category')->where('category_id',$category_id)->get();
        return view('category')->with('product',$list_product_category)->with('category_product',$category_product)->with('category',$category);
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
