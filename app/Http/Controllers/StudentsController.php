<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Models\Ranks;
use App\Models\User;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::with('rank')->get();

        return view("students", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ranks = Ranks::all();
        return view('students.studentsRegister', compact('ranks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_students' => 'required',
            'goals' => 'required',
            'no_hp' => 'required',
            'preferred_schedule' => 'required',
            'rank_id' => 'required|exists:ranks,id',
        ]);
        Students::create([
            'nama_students' => $request->nama_students,
            'goals' => $request->goals,
            'no_hp' => $request->no_hp,
            'preferred_schedule' => $request->preferred_schedule,
            'rank_id' => $request->rank_id,
        ]);
        return redirect()->intended('/')->with('success','You are officially a Stargazer!');
    }

    /**
     * Display the specified resource.
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Students::findOrFail($id);
        $tutors = User::where('role', 'tutor')->get();
        $ranks = Ranks::all();

        return view('students.editStudents', compact('student', 'tutors', 'ranks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Students::findOrFail($id);
        $data = $request->all();

        $rank_id = $request->rank_id ?: $student->rank_id;

        $student -> update([
            'nama_students'         => $request->nama_students,
            'no_hp'                 => $request->no_hp,
            'goals'                 => $request->goals,
            'preferred_schedule'    => $request->preferred_schedule,
            'rank_id'               => $rank_id,
            'tutor_id'              => $request->tutor_id,
        ]);

        return redirect('/students')->with('success', 'Student data updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(students $students)
    {
        //
    }
}
