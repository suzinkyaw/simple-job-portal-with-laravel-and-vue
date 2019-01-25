<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'jb_employers';
    protected $fillable = ['user_id','name', 'address', 'website', 'email','no_of_employee','tel'];
}
