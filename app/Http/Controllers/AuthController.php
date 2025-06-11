<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\Register;
use App\Models\Registers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class AuthController extends Controller
{
    //

    public function register()
    {
        return view('Auth.register');
    }

    public function registerpost(AuthRequest $request)
    {


        $register = new Registers();

        $register -> fname = request('regFname');
        $register -> lname = request('regLname');
        $register -> mname = request('regMname');
        $register -> address = request('regAddress');
        $register -> gender = request('regGender');
        $register -> email = request('regEmail');
        $register -> password = Hash::make(request('regConPass')); //Hashing Password

        $register->save();
        
        FacadesAlert::success('Success!', 'Successfully Registered!');
        return redirect()->route('register.post');
    }
}
