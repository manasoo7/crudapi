<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class studentsController extends Controller
{
    //
    protected $studentsModel = NULL;

    protected function getStudentModel() {
        
        if($this->studentsModel==NULL) {
            $this->studentsModel = new students(); 
        }
        return $this->studentsModel;
}
    public function registerStudent(Request $request) {
        $data = $request->all();
        $aresponse = $this->getStudentModel()->registerStudent($request, $data);
        return $aresponse;
        // return students::create($request->all());
    }

    public function getStudent() {
        return $this->getStudentModel()->all();
    }
}
