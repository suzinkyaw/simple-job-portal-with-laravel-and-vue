<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jb_jobs';
    protected $fillable = ['title', 'min_salary', 'max_salary', 'open_to'];
}
