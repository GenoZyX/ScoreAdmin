<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable= ['student_names','student_lastnames','phone_number','address','institutional_email'];
}
