<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Registers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class AuthController extends Controller
{
    //

    public function register()
    {
        return view('Auth.register');
    }

    public function store(AuthRequest $request)
    {   
        //Only use validated data
        $validated = $request->validated();

        $register = new Registers();

        $register -> fname = request('regFname');
        $register -> lname = request('regLname');
        $register -> mname = request('regMname');
        $register -> address = request('regAddress');
        $register -> gender = request('regGender');
        $register -> email = request('regEmail');
        $register -> password = Hash::make($validated['regConPass']); //Hashing Password, Validated

        $register->save();
        
        FacadesAlert::success('Success!', 'Successfully Registered!'); //Show success alert

        Auth::login($register); //Login to new user

        return redirect()->route('register'); // Redirect to the registration
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function loginPost(LoginRequest $request)
    {
        $validated = $request->validated();

        // Find the user email
        $user = Registers::where('email', $validated['logEmail'])->first();

        //Validation if the Email is registered
        if (!$user) {
    
            FacadesAlert::error('Login Failed!','The Email is not registered!');
            return back()->withInput();

        }

        //validation if Password is correct
        if (!Hash::check($validated['logPassword'], $user->password)) {

            FacadesAlert::error('Login Failed!', 'Incorrect Password!');
            return back()->withInput();

        }

        if (Auth::attempt(['email' => $validated['logEmail'], 'password' => $validated['logPassword']])) {
            FacadesAlert::success('Success!', 'Logged in successfully!'); //Show success alert
            return redirect()->back()->with('login_success', true);
        }

        // Fallback
        FacadesAlert::error('Login Failed', 'Something went wrong. Please try again.');
        return back()->withInput();
    }

    public function dashboard(Request $request)
    {
        return view('Auth.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
