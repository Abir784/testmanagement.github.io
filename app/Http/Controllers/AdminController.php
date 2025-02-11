<?php

namespace App\Http\Controllers;

use App\Imports\StudentImport;
use App\Models\Student;
use App\Models\Country;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentSampleExport;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\Auth;
use PDF;




class AdminController extends Controller
{
    function student_index(){
        $country=Country::select('name')->get();
        $courses=Course::select('id','name')->get();
        return view('auth.admin.add_student',[
            'courses'=>$courses,
            'country'=>$country,
        ]);
    }
    function student_post(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:students,email',
            'course_id'=>'required',
            'batch_id'=>'required',
            'phone_no'=>'required',
            'registration_no'=>'required',
            'country'=>'required',

        ],[
            'email.unique'=>"This email is already been registered",
            'course_id.required'=>"Course Name is required",
            'batch_id.required'=>"Batch Name is required",
            'phone_no.required'=>"Phone Number is required",
            'registration_no.required'=>"Registration Number is required",
            'country.required'=>"Country Name is required",

        ]);
        $new_user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->registration_no),
            'role'=>2,
            'created_at'=>Carbon::now(),
        ]);

        Student::create([
            'user_id'=>$new_user->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'registration_no'=>$request->registration_no,
            'course_id'=>$request->course_id,
            'batch_id'=>$request->batch_id,
            'phone_no'=>$request->phone_no,
            'country'=>$request->country,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Student Added Successfully');
    }
    function student_show(){

        $students=Student::all();
        return view('student.students_list',

        ['students'=>$students,]
    );
    }
    function student_delete($id){
        Student::where('user_id',$id)->delete();
        User::where('id',$id)->delete();
        return back()->with('success','Student Deleted Succesfully');
    }
    function import_student(Request $request){
        $request->validate([

            'course_id'=>'required',
            'batch_id'=>'required',
            'student_file'=>'required|file|mimes:csv',

        ],[
            'course_id.required'=>'Course need to be selected',
            'batch_id.required'=>'Batch need to be selected',
            'student_file.required'=>'Upload csv file',
        ]
    );


        Excel::import(new StudentImport($request->course_id,$request->batch_id), $request->file('student_file'));

        return back()->with('success',"Done");

    }
    function sample_export(){
        return Excel::download(new StudentSampleExport, 'sample.xlsx');
    }


    function admin_index(){
        return view('auth.admin.add_admin');

    }

    function admin_post(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required',
            'role'=>'required',
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>bcrypt($request->password),
        ]);
        return back()->with('success','Successfull');

    }
    function show_admins(){
        $admins=User::where('role','!=','2')->get();
        return view('auth.admin.show_admininstrators',[
            'admins'=>$admins,
        ]);



    }
    function admin_delete($id){
        User::find($id)->delete();

        return back()->with('success','Deleted');
    }

    function admin_edit($id){

        $admin=User::where('id',$id)->first();
        return view('auth.admin.edit_admin',[
            'admin'=>$admin,
            'id'=>$id,
        ]);
    }
    function admin_update(Request $request){
        if($request->password == null){
            User::find($request->id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'role'=>$request->role,
                'updated_at'=>now(),
            ]);

        }else{
            User::find($request->id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'role'=>$request->role,
                'password'=>bcrypt($request->password),
                'updated_at'=>now(),
            ]);


        }
        return back()->with('success','Successfull');



    }
    function student_edit($user_id){

        $student=Student::where('user_id',$user_id)->first();
        return view('student.student_edit',[
            'student'=>$student,
        ]);

    }
    function student_update(Request $request){
       if($request->password == null){
           User::where('id',$request->user_id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
           ]);
           Student::where('user_id',$request->user_id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'registration_no'=>$request->registration_no,
           ]);

       }else{
        User::where('id',$request->user_id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
           ]);
           Student::where('user_id',$request->user_id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'registration_no'=>$request->registration_no,
           ]);
       }

       return back()->with('success','Successfull');
    }



}
