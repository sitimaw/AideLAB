<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:dosen')->except('logout');
        $this->middleware('guest:aslab')->except('logout');
    }

    public function showLoginForm($url = 'aslab')
    {
        if ($url !== 'dosen' && $url !== 'aslab') {
            return abort(404);
        }
        return view('auth.login', compact('url'));
    }

    public function dosenLogin(Request $request)
    {
        $this->validate($request, [
            'nip'   => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('dosen')->attempt(['nip' => $request->nip, 'password' => $request->password])) {

            return redirect()->intended('/dosen');
        }
        return back()->withInput($request->only('nip'));
    }

    public function aslabLogin(Request $request)
    {
        $this->validate($request, [
            'npm' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('aslab')->attempt(['npm' => $request->npm, 'password' => $request->password])) {
            return redirect()->intended('/aslab');
        }
        return back()->withInput($request->only('npm'));
    }
}
