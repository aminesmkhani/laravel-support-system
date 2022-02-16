<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    public function register(Request $request)
    {
        dd($request->all());
    }

}
