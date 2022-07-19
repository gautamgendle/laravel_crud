<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function userRegister()
    {
        return view('auth.register');
    }

    public function userLogin()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:user',
                'password' => 'required|max:12|confirmed',
                'password_confirmation' => 'required'
            ]
        );

        if (is_null($request)) {
            return redirect('auth.register');
        } else {
            $user = new UserModel();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = Hash::make($request['password']);
            $res = $user->save();

            if ($res) {
                return back()->with('success', 'You have register successfully');
            } else {
                return back()->with('fail', 'Something wrong');
            }
        }
    }

    public function login(Request $request)
    {
        $request->validate(
            [

                'email' => 'required|email',
                'password' => 'required|max:12',

            ]
        );
        $user = UserModel::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('/customer/view');
            } else {
                return back()->with('fail', 'Password is incorrect');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }
    }

    public function logout(Request $request) 
    {
           Auth::logout();
          return redirect('/login');
   
    }

    public function dashboard(){
        return view('dashboard');
    }
}
