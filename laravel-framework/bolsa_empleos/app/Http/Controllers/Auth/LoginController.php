<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function username()
    {
        return 'dui';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Request $request)
    {
        $dui = $request->input('dui');
        $password = $request->input('password');

        if (Auth::attempt(['dui' => $dui, 'password' => $password]))
        {
            if(Auth::user()->is_active){
                if(Auth::user()->cod_tipo_usuario == 1 ){
                    return redirect()->route('gestor.dashboard');
                }else{
                    return redirect()->route('inicio');
                }
            }else{
                Auth::logout();
                return view('perfilBloqueado');
            }
        }else{
            return redirect()->route('login');
        }
    }
}
