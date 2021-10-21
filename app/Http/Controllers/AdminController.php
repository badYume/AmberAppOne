<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentList = Student::all();

        return view('admin.adminHomeView', compact('studentList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create([
            'first_nm' => $request->first_name_input,
            'last_nm' => $request->last_name_input,
            'd_o_b' => $request->d_o_b_input,
            'class' => $request->class_input,
            'phone_nbr' => $request->phone_number_input,
            'email_addr' => $request->email_input,
            'gender' => $request->gender_input,
        ]);

        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('admin.editStudent', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


            if ($request->first_name_input != NULL)
            {
                Student::where('id', '=', $id)->UPDATE([
                'first_nm' => $request->first_name_input
                ]);
            }




            if ($request->last_name_input != NULL)
            {
                Student::where('id', '=', $id)->UPDATE([
                'last_nm' => $request->last_name_input
                ]);
            }



            if ($request->d_o_b_input != NULL) {
                Student::where('id', '=', $id)->UPDATE([
                'd_o_b' => $request->d_o_b_input
                ]);
            }


            if ($request->class_input != NULL) {
                Student::where('id', '=', $id)->UPDATE([
                 'class' => $request->class_input
                ]);
            }

            if ($request->phone_number_input != NULL) {
                Student::where('id', '=', $id)->UPDATE([
                 'phone_nbr' => $request->phone_number_input
                ]);
            }

            if ($request->email_input != NULL) {
                Student::where('id', '=', $id)->UPDATE([
                'email_addr' => $request->email_input
                ]);
            }

            if ($request->gender_input != NULL) {
                Student::where('id', '=', $id)->UPDATE([
                'gender' => $request->gender_input
                ]);
            }
        return redirect(route('admin.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->DELETE();
        return redirect(route('admin.index'));
        //
    }
}
