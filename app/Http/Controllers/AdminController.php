<?php

namespace App\Http\Controllers;

use App\User;
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
        $admins= Admin::with('user')->get();
        return view('pages.AdminIndex',compact('admins'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('pages.CreateAdmin');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['user_type'=>0]);
        User::create($request->all());
        $recup = User::all();
        $recupder = $recup->last();
        $request->request->add(['user_id'=>$recupder->id]);
        Admin::create($request->all());
        return redirect('admin/dashboard/admins')->with('success','student created!');

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

        $user_id=$admin->user_id ;
        $admin->delete();
        $user = User :: find($user_id);
        $user->delete();
        return redirect('admin/dashboard/students');

    }
}
