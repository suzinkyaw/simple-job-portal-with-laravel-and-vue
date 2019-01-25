<?php

namespace App\Http\Controllers\Api\V1;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CompaniesController extends Controller
{
    public function index()
    {
        return Company::all();
    }

    public function show($id)
    {
        return Company::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());

        return $company;
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $user_id = DB::table('users')->insertGetId(
            [ 'name' => $data['name'],
            'email' => $data['email'],
            'role' => 2,
            'password' => Hash::make($data['password']), ]
);
        
        $data['user_id']=$user_id;
        $company = Company::create($data);
        return $company;
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return '';
    }
}
