<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'jb_employees';
    protected $fillable = ['user_id', 'gender', 'tel1', 'tel2', 'job_category_id', 'cv'];
}
