<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin ;
use App\Student ;
use App\Teacher ;
use App\Alert ;
use App\Demand ;


class AdminController extends Controller
{
    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins= Admin::with('user')->orderBy('arrival','asc')->get();
        return view('dashboard.admins',compact('admins'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('dashboard.userCreate');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['user_id'=>1]);
        Admin::create($request->all());
        return redirect('dashboard/admins')->with('success','admin created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        $admin= Admin::with('module')->get()->find($admin->id);
            return view('dashboard/adminSingle');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin= Admin::find($admin->id);
        $admin->delete();
        return redirect('dashboard/admins');

    }
}
