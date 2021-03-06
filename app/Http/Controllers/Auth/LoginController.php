<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
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
            session(['bc1' => 'AideLAB']);
            session( ['bc2' => ['nama' => 'Matakuliah', 
                                    'route' => 'dosen.matakuliah']
                    ]);

            return redirect()->intended('dosen/matakuliah');
        }
        return back()->with('gagal', "NIP atau password yang Anda masukkan salah!")->withInput($request->only('nip'));
    }

    public function aslabLogin(Request $request)
    {
        $this->validate($request, [
            'npm' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('aslab')->attempt(['npm' => $request->npm, 'password' => $request->password])) {
            session(['bc1' => 'AideLAB']);
            session( ['bc2' => ['nama' => 'Praktikum', 
                                    'route' => 'aslab.praktikum']
                    ]);

            return redirect()->intended('aslab/praktikum');
        }
        return back()->with('gagal', "NPM atau password yang Anda masukkan salah!")->withInput($request->only('npm'));
    }
}
