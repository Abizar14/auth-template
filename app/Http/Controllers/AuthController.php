<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Register
    public function register()
    {
        return view('auth.register');
    }

    // Process Register
    public function processRegister(Request $request)
    {

        // Validasi password dan konfirm password
        // if($request->password !== $request->confirm_password)
        // {
        //     Session::flash('msgPassword', 'Konfirmasi Password Tidak Sama Dengan Password');
        //     return redirect('register');
        // }

        // $request->validate([
        //     'name' => 'required|regex:/(^([a-zA-z]+)(\d+)?$)/u',
        //     'password' => 'required|min:6'
        // ]);

        // $data = User::create([
        //     'name' => $request->name,
        //     'phone_number' => $request->phone_number,
        //     'address' => $request->address,
        //     'role_id' => '2',
        //     'password' => Hash::make($request->password)
        // ]);

        // dd($data);
        // Session::flash('successReg', 'Register Successfull');
        // return redirect('login');
         // validasi ketika confirm password tidak sama dengan password
         if($request->password !== $request->confirm_password) {
            Session::flash('msgConfirmPassword', 'Konfirmasi Password Tidak Sama Dengan Password');
            return redirect('register');
        }

        //validasi data yang diinputkan oleh user
        $this->validate($request,[
            'name'=>'required|unique:users',
            'password'=>'required|confirmed|min:8'

        ]);
        $name = $request->name;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $password = bcrypt($request->password);
        $role_id = 2;


        User::create([
            'name' => $name,
            'address' => $address,
            'phone_number' => $phone_number,
            'password' => $password,
            'role_id' => $role_id
        ]);

        Session::flash('messageReg', 'Register Successful! Wait Admin Approve Your Account.');
        return redirect('login');
    }


    // Login
    public function login()
    {
        if(Auth::check())
        {
            return redirect('/');
        } else {
            return view('auth.login');
        }
    }

    // Proccess Login
    public function processLogin(Request $request)
    {


        $crendetials = [
            'name' => $request->input('name'),
            'password' => $request->input('password')
        ];

        if(Auth::attempt($crendetials))
        {
            $request->session()->regenerate();
            return redirect('dashboard');
        } else {
            // Autentikasi gagal, menampilkan pesan error
            Session::flash('errorLog', 'failed');
            Session::flash('msgErrLog', 'Username And Password Wrong');
            return redirect()->back();
        }
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
