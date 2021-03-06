<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Student;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TeacherController extends Controller
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


        /*$students = Student::with('user')->get();
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
        }*/


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.CreateTeacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['user_type'=>1]);
        User::create($request->all());
        $recup = User::all();
        $recupder = $recup->last();
        $request->request->add(['user_id'=>$recupder->id]);
        Teacher::create($request->all());
        return redirect('admin/dashboard/teachers')->with('success','student created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {

        $user_id=$teacher->user_id ;
        $teacher->delete();
        $user = User :: find($user_id);
        $user->delete();
        return redirect('admin/dashboard/teachers');
    }
}
