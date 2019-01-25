<?php

namespace App\Http\Controllers;

class JobsController extends Controller
{
    public function index()
    {
        return view('common.jobs.index');
    }

}
