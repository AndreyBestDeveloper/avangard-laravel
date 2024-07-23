<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginformController extends Controller
{
    public function loginform()
    {   
        return view('auth.loginform');
    }

    public function loginconfirm(Request $request)
    {

        //dd($request->all());
        //dd($request->boolean('remember'));
        

        $request->validate([
            //'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string' 
        ]);


        if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            return redirect()->route('cabinet');
        }

        return back()->withInput()->withErrors([
            'email' => 'Эл адресс или пароль введены неверно. Проверьте правильность введения.
            При возникновении трудностей с входом, обратитесь в поддержку 050 342 3627'
        ]);

        $request->session()->regenerate();
        
    }


    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenetateToken();

        return redirect()->route('home');
    }
}
