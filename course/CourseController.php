<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    function addCourse(Request $req)
    {
        $course= new Course;
        $course->cname=$req->input('cname');
        $course->description=$req->input('description');
        $course->save();
        return $course;

    }
    function list()
    {
        return Course::all();
    }
    function delete($id)
    {
        $result= Course::where('id',$id)->delete();
        if($result)
        {
            return ["result"=>"course has been delete"];
        }
        else{
            return ["result"=>"Operation failed"];
        }

    }
    function getCourse($id)
    {
        return Course::find($id);
    }
    function updateCourse($id,Request $req)
    {
        //return $req->input();
        $course= Course::find($id);
        $course->cname=$req->input('cname');
        $course->description=$req->input('description');
        $course->save();
        return $course;
    }
}
