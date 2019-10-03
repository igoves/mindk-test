<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Common form validation rules
     *
     * @var array
     */
    private $_rules = [
        'name' => 'required|max:255',
        'surname' => 'required|max:255',
        'sex' => 'required',
        'age' => 'required|numeric|min:15|max:120',
        'group' => 'required',
        'faculty' => 'required',
    ];

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $students = new Student();
        $students = $students->orderBy('id', 'DESC')->paginate(5);

        if ($request->ajax()) {
            return view('students.index', compact('students'));
        } else {
            return view('students.ajax', compact('students'));
        }
    }

    /**
     * Create new Student
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('students.form');
        } else {
            $validator = Validator::make($request->all(), $this->_rules);
            if ($validator->fails())
                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);
            $student = new Student();
            $student->name = $request->name;
            $student->surname = $request->surname;
            $student->sex = $request->sex;
            $student->age = $request->age;
            $student->group = $request->group;
            $student->faculty = $request->faculty;
            $student->save();
            return response()->json([
                'fail' => false,
                'redirect_url' => url('/')
            ]);
        }
    }

    /**
     * Create new Student
     *
     * @param \Illuminate\Http\Request $request ->id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Student::destroy($id);
        return redirect('/');
    }

    /**
     * Update new Student
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->isMethod('get'))
            return view('students.form', ['student' => Student::find($id)]);
        else {
            $validator = Validator::make($request->all(), $this->_rules);
            if ($validator->fails())
                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);
            $student = Student::find($id);
            $student->name = $request->name;
            $student->surname = $request->surname;
            $student->sex = $request->sex;
            $student->age = $request->age;
            $student->group = $request->group;
            $student->faculty = $request->faculty;
            $student->save();
            return response()->json([
                'fail' => false,
                'redirect_url' => url('/')
            ]);
        }
    }
}
