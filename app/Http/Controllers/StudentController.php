<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all()->where('user_id', Auth::id());
        return $student;
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
        $id = Auth::id();

        if (Auth::check()) {
            Student::create([
                'surname' => $request->surname,
                'firstname' => $request->firstname,
                'title' => $request->title,
                'birthdate' => $request->datebirth,
                'previousname' => $request->previousname,
                'email' => $request->email,
                'gender' => $request->gender,
                'address' => $request->address,
                'dayphone' => $request->dayphone,
                'eveningphone' => $request->eveningphone,
                'fax' => $request->fax,
                'countrycode' => $request->code,
                'user_id' => $id
            ]);

            return response()->json('Product created!', 200);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)

    {
        $id = Auth::id();

        if (Auth::check()) {
            Student::where('user_id', $id)
                ->update(
                    [
                        'nationality' => $request->nationaliti,
                        'citybirth' => $request->coob,
                        'countrybirth' => $request->cob,
                        'countryresidence' => $request->residence,
                        'fundingsource' => $request->funding,
                    ]
                );

            return response()->json('Step 2 Done!', 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function updateTwo(Request $request, Student $student)

    {
        $id = Auth::id();

        if (Auth::check()) {
            Student::where('user_id', $id)
                ->update(
                    [
                        'program_id' => $request->programs,
                        'criminalconviction' => $request->criminal,
                        'specialneeds' => $request->need,
                        'ccdetails' => $request->reason,
                    ]
                );

            return response()->json('Step 3 Done!', 200);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function updateThree(Request $request, Student $student)

    {
        $id = Auth::id();

        return $request;

        if (Auth::check()) {
            Student::where('user_id', $id)
                ->update(
                    [
                        'program_id' => $request->programs,
                        'criminalconviction' => $request->criminal,
                        'specialneeds' => $request->need,
                        'ccdetails' => $request->reason,
                    ]
                );

            return response()->json('Step 3 Done!', 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
