<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function create()
    {
        return view('admin.createSubject');
    }

    public function index()
    {
        $subjectsList = Subject::all();
        return view('admin.viewSubject',compact('subjectsList'));
    }

    public function destroy($id)
    {
        Subject::find($id)->DELETE();
        return redirect(route('subject_view'));
    }

    public function createRequest(Request $request)
    {
        Subject::create([
            'subject_nm'=> $request->subject_name_input,
            'cost_amt'=>$request->subject_cost_input,
        ]);
        return redirect(route('subject_view'));
    }
}
