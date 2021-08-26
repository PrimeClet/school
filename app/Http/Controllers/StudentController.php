<?php

namespace App\Http\Controllers;

use App\Cv;
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

            User::create([
                'student_id' => count(Student::all())
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
    public function uploadFile(Request $request, Student $student)

    {
        return $request->file;
//        $upload_path = public_path('upload');
//        $file_name = $request->file->getClientOriginalName();
//        $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension();
//        $request->file->move($upload_path, $generated_new_name);
//
//        return response()->json(['success' => 'You have successfully uploaded "' . $file_name . '"']);
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
        $one = $request->one;
        $two = $request->two;
        $three = $request->three;
        $four = $request->four;
        $five = $request->five;

        if(count($one) !== 0 && count($one) == 4) {
            Cv::create([
                'name' => $one['ins1'],
                'date' => $one['date1'],
                'degree' => $one['degree1'],
                'major' => $one['major1'],
                'student_id' => $id
            ]);
        };

        if(count($two) !== 0 && count($two) == 4) {
            Cv::create([
                'name' => $two['ins2'],
                'date' => $two['date2'],
                'degree' => $two['degree2'],
                'major' => $two['major2'],
                'student_id' => $id
            ]);
        };

        if(count($three) !== 0 && count($three) == 4) {
            Cv::create([
                'name' => $three['ins3'],
                'date' => $three['date3'],
                'degree' => $three['degree3'],
                'major' => $three['major3'],
                'student_id' => $id
            ]);
        };

        if(count($four) !== 0 && count($four) == 4) {
            Cv::create([
                'name' => $four['ins4'],
                'date' => $four['date4'],
                'degree' => $four['degree4'],
                'major' => $four['major4'],
                'student_id' => $id
            ]);
        };

        if(count($five) !== 0 && count($five) == 4) {
            Cv::create([
                'name' => $five['ins5'],
                'date' => $five['date5'],
                'degree' => $five['degree5'],
                'major' => $five['major5'],
                'student_id' => $id
            ]);
        }

        return response()->json('Bien');
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
