<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class students extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password'
    ];

    public function registerStudent($request, $data) {
        $student = students::select('fname')->where('fname', '=', $data['fname'])->first();
        if(empty($student)) {
            students::create([
                "fname" =>  $data["fname"],
                "lname" =>  $data["lname"],
                "email" =>  $data["email"],
                "password"  =>  $data["password"],
            ]);
        }
        else {
            echo "it already exists!";
            echo "die";
        }
    }

}
