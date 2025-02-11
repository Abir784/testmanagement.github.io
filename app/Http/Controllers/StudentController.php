<?php

namespace App\Http\Controllers;

use App\Models\CourseBasedAssignmentSubmission;
use App\Models\CourseBasedQuizQuestion;
use App\Models\CourseBasedTest;
use App\Models\CourseBasedTestResult;
use App\Models\CoursedBasedAssignment;
use App\Models\CoursedBasedDescriptiveAnswer;
use App\Models\IndependentDescriptiveAnswer;
use App\Models\IndependentTest;
use App\Models\IndependentTestQuestions;
use App\Models\IndependentTestResult;
use App\Models\IndividualTest;
use App\Models\IndividualTestDescriptiveAnswer;
use App\Models\IndividualTestQuestion;
use App\Models\InvidualTestResult;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver;

class StudentController extends Controller
{
    function AssignmentIndex($id){
        return view('assignment.assignment_submission',[
            'id'=>$id,
        ]);

    }
    function AssignmentPost(Request $request){
        $request->validate([
            'file'=>'required|mimes:pdf,csv,xlxx,docs|max:2080'
        ],[
            'file.required'=>'This field is required',
          ]
    );
    $student=Student::where('user_id',Auth::id())->first();
     $id=CourseBasedAssignmentSubmission::insertGetId([
        'assignment_id'=>$request->id,
        'student_id'=>$student->id,
        'created_at'=>now(),
     ]);
     $extention=$request->file->getClientOriginalExtension();
     $file_name=$id."-".$student->id.".".$extention;

     $request->file->move(public_path('assets/uploads/assignment_submissions'),$file_name);

     CourseBasedAssignmentSubmission::where('id',$id)->update([
         'file_name'=>$file_name,
         'updated_at'=>now(),
     ]);
     return redirect(route('student.assignment.index'));
    }

    function CourseBasedQuizResultIndex(){




        $student=Student::where('user_id',Auth::user()->id)->first();
        $quizzes=CourseBasedTest::where('course_id',$student->course_id)->where('batch_id',$student->batch_id)->get();
        $assignments=CoursedBasedAssignment::where('course_id',$student->course_id)->where('batch_id',$student->batch_id)->get();
        $quiz_results=CourseBasedTestResult::where('student_id',$student->id)->get();
        $assignments_result=CourseBasedAssignmentSubmission::where('student_id',$student->id)->get();
        $written_answer=CoursedBasedDescriptiveAnswer::where('student_id',$student->id)->get();


        $main_result=[];
        foreach($quiz_results as $result){
            $main_result[$result->quiz_id]=($result->total_marks);
            foreach($written_answer as $answer){
                if($result->quiz_id == $answer->quiz_id){
                    $main_result[$result->quiz_id]+=($answer->mark);
                }
            }
        }


        $quizzes_results=[];
        foreach($quizzes as $key=>$quiz){

            $questions=CourseBasedQuizQuestion::where('quiz_id',$quiz->id)->get();

            $full_marks=0;
            foreach($questions as $question){
                $full_marks+=($question->rel_to_question->total_marks);

            }
            $marks=0;
            if(array_key_exists($quiz->id,$main_result)){
                $marks=$main_result[$quiz->id];

                if($marks >= (0.8*$full_marks)){
                    $gpa=4;
                    $grade="A+";
                }elseif (($marks>=0.75*$full_marks) && ($marks<(0.80*$full_marks))) {
                    $gpa=((($marks-($full_marks*0.75))/5)*0.24)+3.75;
                    $grade="A";
                }elseif(($marks>=0.70*$full_marks) && ($marks<(0.75*$full_marks))){
                    $gpa=((($marks-($full_marks*0.70))/5)*0.24)+3.50;
                    $grade="A-";
                }elseif(($marks>=0.65*$full_marks) && ($marks<(0.70*$full_marks))){
                    $gpa=((($marks-($full_marks*0.65))/5)*0.24)+3.25;
                    $grade="B+";
                }elseif(($marks>=0.60*$full_marks) && ($marks<(0.65*$full_marks))){
                    $gpa=((($marks-($full_marks*0.60))/5)*0.24)+3.00;
                    $grade="B";
                }elseif(($marks>=0.55*$full_marks) && ($marks<(0.60*$full_marks))){
                    $gpa=((($marks-($full_marks*0.55))/5)*0.24)+2.75;
                    $grade="B-";
                }elseif(($marks>=0.50*$full_marks) && ($marks<(0.55*$full_marks))){
                    $gpa=((($marks-($full_marks*0.50))/5)*0.24)+2.50;
                    $grade="C+";
                }elseif($marks<0.50*$full_marks){
                    $gpa=0;
                    $grade="F";
                }else{
                    $gpa=0;
                    $grade="Absent";
                }

                $quizzes_results[]=array(
                    'name'=>$quiz->name,
                    'gpa'=>$gpa,
                    'mark_obtained'=>$marks,
                    'full_marks'=>$full_marks,
                    'grade'=>$grade,
                );

            }else{
                $quizzes_results[]=array(
                    'name'=>$quiz->name,
                    'gpa'=>0,
                    'mark_obtained'=>"Absent",
                    'full_marks'=>$full_marks,
                    'grade'=>'N/A',
                );
            }

        }



        $assignment_marks=0;
        $assignment_results=[];
        foreach($assignments as $assignment){
            foreach($assignments_result as $result){
                if($assignment->id == $result->assignment_id){
                    $assignment_marks=$result->mark;
                }
            }


            $full_assignment_marks=$assignment->full_marks;




            if($assignment_marks >= (0.8*$full_assignment_marks)){
                $gpa=4;
                $grade="A+";
            }elseif (($assignment_marks>=0.75*$full_assignment_marks) && ($assignment_marks<(0.80*$full_assignment_marks))) {
                $gpa=((($assignment_marks-($full_assignment_marks*0.75))/5)*0.24)+3.75;
                $grade="A";
            }elseif(($assignment_marks>=0.70*$full_assignment_marks) && ($assignment_marks<(0.75*$full_assignment_marks))){
                $gpa=((($assignment_marks-($full_assignment_marks*0.70))/5)*0.24)+3.50;
                $grade="A-";
            }elseif(($assignment_marks>=0.65*$full_assignment_marks) && ($assignment_marks<(0.70*$full_assignment_marks))){
                $gpa=((($assignment_marks-($full_assignment_marks*0.65))/5)*0.24)+3.25;
                $grade="B+";
            }elseif(($assignment_marks>=0.60*$full_assignment_marks) && ($assignment_marks<(0.65*$full_assignment_marks))){
                $gpa=((($assignment_marks-($full_assignment_marks*0.60))/5)*0.24)+3.00;
                $grade="B";
            }elseif(($assignment_marks>=0.55*$full_assignment_marks) && ($assignment_marks<(0.60*$full_assignment_marks))){
                $gpa=((($assignment_marks-($full_assignment_marks*0.55))/5)*0.24)+2.75;
                $grade="B-";
            }elseif(($assignment_marks>=0.50*$full_assignment_marks) && ($assignment_marks<(0.55*$full_assignment_marks))){
                $gpa=((($assignment_marks-($full_assignment_marks*0.50))/5)*0.24)+2.50;
                $grade="C+";
            }elseif($assignment_marks<0.50*$full_assignment_marks){
                $gpa=0;
                $grade="F";
            }else{
                $gpa=0;
                $grade="Absent";
            }

            $assignment_results[]=array(
                'name'=>$assignment->title,
                'full_marks'=>$assignment->full_marks,
                'marks_obtained'=>$assignment_marks,
                'gpa'=>$gpa,
                'grade'=>$grade,
            );
        }






        return view('course_based_test.result_sheet',[
            'student'=>$student,
            'quizzes_results'=>$quizzes_results,
            'assignment_results'=>$assignment_results,
        ]);





    }




    function IndependentResultIndex(){




        $student=Student::where('user_id',Auth::user()->id)->first();
        $quizzes=IndependentTest::all();
        $quiz_results=IndependentTestResult::where('student_id',$student->id)->get();
        $written_answer=IndependentDescriptiveAnswer::where('student_id',$student->id)->get();


        $main_result=[];
        foreach($quiz_results as $result){
            $main_result[$result->quiz_id]=($result->total_marks);
            foreach($written_answer as $answer){
                if($result->quiz_id == $answer->quiz_id){
                    $main_result[$result->quiz_id]+=($answer->mark);
                }
            }
        }


        $quizzes_results=[];
        foreach($quizzes as $key=>$quiz){

            $questions=IndependentTestQuestions::where('quiz_id',$quiz->id)->get();

            $full_marks=0;
            foreach($questions as $question){
                $full_marks+=($question->rel_to_question->total_marks);

            }
            $marks=0;
            if(array_key_exists($quiz->id,$main_result)){
                $marks=$main_result[$quiz->id];

                if($marks >= (0.8*$full_marks)){
                    $gpa=4;
                    $grade="A+";
                }elseif (($marks>=0.75*$full_marks) && ($marks<(0.80*$full_marks))) {
                    $gpa=((($marks-($full_marks*0.75))/5)*0.24)+3.75;
                    $grade="A";
                }elseif(($marks>=0.70*$full_marks) && ($marks<(0.75*$full_marks))){
                    $gpa=((($marks-($full_marks*0.70))/5)*0.24)+3.50;
                    $grade="A-";
                }elseif(($marks>=0.65*$full_marks) && ($marks<(0.70*$full_marks))){
                    $gpa=((($marks-($full_marks*0.65))/5)*0.24)+3.25;
                    $grade="B+";
                }elseif(($marks>=0.60*$full_marks) && ($marks<(0.65*$full_marks))){
                    $gpa=((($marks-($full_marks*0.60))/5)*0.24)+3.00;
                    $grade="B";
                }elseif(($marks>=0.55*$full_marks) && ($marks<(0.60*$full_marks))){
                    $gpa=((($marks-($full_marks*0.55))/5)*0.24)+2.75;
                    $grade="B-";
                }elseif(($marks>=0.50*$full_marks) && ($marks<(0.55*$full_marks))){
                    $gpa=((($marks-($full_marks*0.50))/5)*0.24)+2.50;
                    $grade="C+";
                }elseif($marks<0.50*$full_marks){
                    $gpa=0;
                    $grade="F";
                }else{
                    $gpa=0;
                    $grade="Absent";
                }

                $quizzes_results[]=array(
                    'name'=>$quiz->name,
                    'gpa'=>$gpa,
                    'mark_obtained'=>$marks,
                    'full_marks'=>$full_marks,
                    'grade'=>$grade,
                );

            }

        }

        return view('tests.result_sheet',[
            'student'=>$student,
            'quizzes_results'=>$quizzes_results,
        ]);





    }
    function IndividualQuizResultIndex(){

        $student=Student::where('user_id',Auth::user()->id)->first();
        $quiz_results=InvidualTestResult::where('student_id',$student->id)->get();
        $written_answer=IndividualTestDescriptiveAnswer::where('student_id',$student->id)->get();


        $main_result=[];
        foreach($quiz_results as $result){
            $main_result[$result->quiz_id]=($result->total_marks);
            foreach($written_answer as $answer){
                if($result->quiz_id == $answer->quiz_id){
                    $main_result[$result->quiz_id]+=($answer->mark);
                }
            }
        }


        $quizzes_results=[];
        foreach($quiz_results as $key=>$quiz){


            $questions=IndividualTestQuestion::where('quiz_id',$quiz->quiz_id)->get();


            $full_marks=0;
            foreach($questions as $question){

                $full_marks+=($question->rel_to_question->total_marks);


            }

            $marks=0;
            if(array_key_exists($quiz->quiz_id,$main_result)){
                $marks=$main_result[$quiz->quiz_id];
                if($marks >= (0.8*$full_marks)){
                    $gpa=4;
                    $grade="A+";
                }elseif (($marks>=0.75*$full_marks) && ($marks<(0.80*$full_marks))) {
                    $gpa=((($marks-($full_marks*0.75))/5)*0.24)+3.75;
                    $grade="A";
                }elseif(($marks>=0.70*$full_marks) && ($marks<(0.75*$full_marks))){
                    $gpa=((($marks-($full_marks*0.70))/5)*0.24)+3.50;
                    $grade="A-";
                }elseif(($marks>=0.65*$full_marks) && ($marks<(0.70*$full_marks))){
                    $gpa=((($marks-($full_marks*0.65))/5)*0.24)+3.25;
                    $grade="B+";
                }elseif(($marks>=0.60*$full_marks) && ($marks<(0.65*$full_marks))){
                    $gpa=((($marks-($full_marks*0.60))/5)*0.24)+3.00;
                    $grade="B";
                }elseif(($marks>=0.55*$full_marks) && ($marks<(0.60*$full_marks))){
                    $gpa=((($marks-($full_marks*0.55))/5)*0.24)+2.75;
                    $grade="B-";
                }elseif(($marks>=0.50*$full_marks) && ($marks<(0.55*$full_marks))){
                    $gpa=((($marks-($full_marks*0.50))/5)*0.24)+2.50;
                    $grade="C+";
                }elseif($marks<0.50*$full_marks){
                    $gpa=0;
                    $grade="F";
                }else{
                    $gpa=0;
                    $grade="Absent";
                }

                $quizzes_results[]=array(
                    'name'=>$quiz->rel_to_quiz->name,
                    'gpa'=>$gpa,
                    'mark_obtained'=>$marks,
                    'full_marks'=>$full_marks,
                    'grade'=>$grade,
                );

            }

        }
        return view('individual_test.result_sheet',[
            'student'=>$student,
            'quizzes_results'=>$quizzes_results,
        ]);

    }
    function certificate_index(){



        $student=Student::where('user_id',Auth::id())->first();
        $tests=CourseBasedTest::where('course_id',$student->course_id)->where('batch_id',$student->batch_id)->count();
        $assignments=CoursedBasedAssignment::where('course_id',$student->course_id)->where('batch_id',$student->batch_id)->count();
        $total_tests=$tests+$assignments;

        $tests_attended=CourseBasedTestResult::where('student_id',$student->id)->count();
        $assignment_attended=CourseBasedAssignmentSubmission::where('student_id',$student->id)->count();
        // $assignment_attended=0;
        $total_attended=$tests_attended+$assignment_attended;

        if($total_tests ==  $total_attended){

            $image = Image::make(public_path('example.jpg'));
            $image->text($student->name,750, 1000, function($font) {
            $font->file(public_path('font/Lusitana-Regular.ttf'));
            $font->size(90);
            $font->color('#121010');
            $font->align('center');
            $font->valign('top');
            $font->angle(0);
        });
        $image->save(public_path("certificates/".$student->id.'.jpg'));
        // return $image->response('jpg');
    }
    $image_name= $student->id.'.'.'jpg';
    $bool= $total_attended == $total_tests;
        return view('student.certificate_index',[
            'bool'=>$bool,
            'image_name'=>$image_name,
        ]);
    }

    function edit($id){
        $admin=User::where('id',$id)->first();
        return view('password_edit',[
            'admin'=>$admin,
        ]);
    }
    function update(Request $request){
        $request->validate([
            'password'=>'confirmed',
             'old_password'=>'required',

        ]);

        $user=User::where('id',$request->id)->first();
        if(Hash::check($request->old_password,$user->password)){
            $user->update([
                'password'=>bcrypt($request->password),
            ]);
            return back()->with('success','Password Changed Succesfully');

        }else{
            return back()->with('success','Old Password doesn"t match');
        }

    }
}




