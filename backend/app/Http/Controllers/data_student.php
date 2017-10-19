<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class data_student extends Controller
{
    function AddStudent(Request $req){
        DB::beginTransaction();
        try{
            $this->validate($req, [
                'name' => 'required'
            ]);
            $collegeStudent = new collegeStudent;
            $collegeStudent->name = $req->input('name');
            $collegeStudent->save();
            DB::commit();
            return response()->json($collegeStudent, 201);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['message' => 'Failed to add new student, exception:' + $e], 500);
        }
    }
    function UpdateStudent(Request $req){
        DB::beginTransaction();
        try{
            $this->validate($req, [
                'id' => 'required',
                'name' => 'required'
            ]);
            $id = $req->input('id');
            $name = $req->input('name');
            $updatecollegeStudent = DB::table('college_students')
            ->where('id', $id)
            ->update(['name' => $name]);
            DB::commit();
            return response()->json(['message' => 'Successfully updated student data'], 201);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['message' => 'Failed to add new student, exception:' + $e], 500);
        }
    }
}
