<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // Hàm xử lý index
    public function index()
    {
        return view('fontend.index');
    }


    // Hàm xử lý index
    public function blog()
    {
        return view('fontend.blog');
    }


    // Hàm xử lý index
    public function ctsp()
    {
        return view('fontend.chi-tiet-sp');
    }


    // Hàm xử lý index
    public function contact()
    {
        return view('fontend.contact');
    }


    // Hàm xử lý index
    public function login()
    {
        return view('fontend.login');
    }


    // Hàm xử lý index
    public function policy()
    {
        return view('fontend.policy');
    }


    // Hàm xử lý index
    public function register()
    {
        return view('fontend.register');
    }


    public function shop()
    {
        return view('fontend.shop');
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
