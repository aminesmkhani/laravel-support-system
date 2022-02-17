<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo= '/home';

    public function __construct()
    {
        $this->middleware('guest:web');
        $this->middleware('guest:admin');
    }

    public function showRegisterationForm()
    {
        return view('admin.auth.register');
    }

    public function register(StoreAdminRequest $request)
    {
        $admin = $this->create($request->all());

    }


    private function create(array $data)
    {
        return Admin::create([
           'name'   =>  $data['name'],
           'email'  =>  $data['email'],
           'password'  => Hash::make($data['password']),
            'department'    => $data['department']

        ]);
    }

}
