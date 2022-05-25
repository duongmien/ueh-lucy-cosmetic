<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
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
    // Code đăng nhập
    public function login()
    {
        $category_product = DB::table('tbl_product_category')->get();
        return view('login')->with('category_product', $category_product);
    }
    //Code đăng ký
    public function register()
    {
        $category_product = DB::table('tbl_product_category')->get();
        return view('register')->with('category_product', $category_product);
    }
    // Code thêm người dùng trong quá trình đăng ký
    public function add_user(Request $request)
    {
        $data = array();
        $data['user_phone'] = $request->user_phone;
        $data['user_password'] = $request->user_password;
        $data['user_name'] = $request->user_name;
        $data['user_address'] = $request->user_address;

        DB::table('tbl_user')->insert($data);

        // Session::put('user_id',$user_id);
        Session::put('name', $request->user_name);
        Session::put('message', 'Đăng ký thành công\nHãy đăng nhập');
        // Session::put('message','đfd');
        return Redirect('/login');
    }
    // Code kiểm tra đăng nhập
    public function check_login(Request $request)
    {
        $user_phone = $request->user_phone;
        $password = $request->password;

        $login = DB::table('tbl_user')->where('user_phone', $user_phone)->where('user_password', $password)->first();

        if ($login) {
            Session::put('name', $login->user_name);
            Session::put('user_id', $login->user_id);
            Session::put('message', 'Đăng nhập thành công');
            return Redirect::to('/');
        } else {
            Session::put('message', 'Sai tài khoản hoặc mật khẩu');
            return Redirect::to('/login');
        }
    }
    // Code đăng xuất
    public function log_out()
    {
        Session::put('name', null);
        Session::put('user_id', null);
        return Redirect::to('/login');
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
