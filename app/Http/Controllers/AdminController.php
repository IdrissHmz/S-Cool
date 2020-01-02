<?php

namespace App\Http\Controllers;

use App\Mark;
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
        $teachers= Teacher::with('user')->get();
        $teachers_rect = array();
        $i = 0;
        foreach($teachers as $teacher){
            $uss = $teacher->user;
            $teachers_rect[$i] = array(
                'first_name'=> $uss->first_name ,
                'last_name'=> $uss->last_name ,
                'email'=> $uss->email ,
                'module'=> $teacher->module ,
                'id'=> $teacher->id ,
            );
            $i++;
        }

        /*
         *
         *
         * copier cette partie dans StudentController
         *
         */
        $students= Student::with('user')->get();
        $students_rect = array();
        $i = 0;
        foreach($students as $student){
            $uss = $student->user;
            $students_rect[$i] = array(
                'first_name'=> $uss->first_name ,
                'last_name'=> $uss->last_name ,
                'email'=> $uss->email ,
                'promo'=> $student->promo ,
                'group'=> $student->group ,
                'matricule'=> $student->matricule ,
                'id'=> $student->id ,
            );
            $i++;
        }



        /*
         *
         *
         * copier cette partie dans AdminController
         *
         */
        $admins= Admin::with('user')->get();
        $admins_rect = array();
        $i = 0;
        foreach($admins as $admin){
            $uss = $admin->user;
            $admins_rect[$i] = array(
                'first_name'=> $uss->first_name ,
                'last_name'=> $uss->last_name ,
                'email'=> $uss->email ,
                'promo'=> $admin->promo ,
                'group'=> $admin->group ,
                'matricule'=> $admin->matricule ,
                'id'=> $admin->id ,
            );
            $i++;
        }
        $marks = Mark::all();
        $users = User::all();
        return view('pages.AdminDashboard',['teachers' => json_encode($teachers_rect),'students'=>json_encode($students_rect),'admins'=>json_encode($admins_rect),'users'=>$users,'marks'=>$marks]);

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
