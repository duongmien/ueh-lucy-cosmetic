<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    // Thêm sản phẩm vào giỏ hàng
    public function add_cart_ajax(Request $request)
    {
        $data = $request->all();
        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $cart = Session::get('cart');
        if ($cart != null) {
            $is_available = 0;
            foreach ($cart as $key => $val) {
                if ($val['product_id'] == $data['cart_product_id']) {
                    $is_available++;
                }
            }
            if ($is_available == 0) {
                $cart[] = array(
                    'sesstion_id' => $session_id,
                    'product_id' => $data['cart_product_id'],
                    'product_name' => $data['cart_product_name'],
                    'product_image' => $data['cart_product_image'],
                    'product_qty' => $data['cart_product_qty'],
                    'product_price' => $data['cart_product_price'],
                );
                Session::put('cart', $cart);
            }
        } else {
            $cart[] = array(
                'sesstion_id' => $session_id,
                'product_id' => $data['cart_product_id'],
                'product_name' => $data['cart_product_name'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
            );
        }
        Session::put('cart', $cart);
        Session::save();
    }
    // Show những sản phẩm có trong giỏ hàng
    public function show_cart(Request $request){
        $category_product = DB::table('tbl_product_category')->get();

        return view('cart')->with('category_product',$category_product);
    }

    // Xóa một sản phẩm có trong giỏ hàng
    public function delete_cart(Request $request){
        $product_id = $request->input('product_id');
        $cart = Session::get('cart');
        if($cart==true){
            foreach($cart as $session => $val){
                if($val['product_id']==$product_id){
                    unset($cart[$session]);
                }
            }
            Session::put('cart',$cart);
        }
    }

    // Update giỏ hàng
    public function update_cart(Request $request){
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $subtotal = 0;
        $cart = Session::get('cart');
        if($cart==true){
            foreach($cart as $session => $val){
                if($val['product_id']==$product_id){
                    $cart[$session]['product_qty'] = $quantity;
                    $subtotal = $cart[$session]['product_qty'] * $cart[$session]['product_price'];
                }
            }
            Session::put('cart',$cart);
            return response()->json(['subtotal'=>number_format($subtotal).' '.'vnd']);
        }
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
