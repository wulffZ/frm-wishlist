<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function indexLogin(Request $request) {
        return view('user.indexLogin');
    }

    public function doLogin(Request $request) {
        $email = $request->get('email');

        if (User::where('email', '=', $email)->exists()) {
            $this->validate($request, [
                'email' => 'required',
                'password' => 'required'
            ]);

            $user_data = array(
                'email' => $request->get('email'),
                'password' => $request->get('password')
            );

            if (!Auth::attempt($user_data)) {
                return back()->with('error', 'Email / Password incorrect');
            }
            return redirect('/');
        } else {
            return back()->with('error', 'Account with this email does not exist.');
        }
    }

    public function indexRegister(Request $request) {
        return view('user.indexRegister');
    }

    public function doRegister(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');

        if(User::where('email', '=', $email)->exists()) {
            return back()->with('error', 'Email invalid. User with that email already exists.');
        }
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->role = 'user';
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);

        $user->save();

        // now log them in

        $user_data = array(
            'email' => $email,
            'password' => $password
        );

        if (Auth::attempt($user_data)) {
            return redirect('/');
        } else {
            return back()->with('error', 'Something went wrong.');
        }

    }

    public function doLogout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
