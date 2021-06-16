<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Aslab;
use App\Http\Controllers\Controller;
use App\Models\Matakuliah;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:aslab');
    }

    public function showRegistrationForm()
    {
        $matakuliah = Matakuliah::all();
        return view('auth.register', compact('matakuliah'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'npm' => ['required', 'string', 'size:13', 'unique:aslab,npm'],
            'nama' => ['required', 'string'],
            'no_hp' => ['required', 'digits_between:10,15'], 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:aslab,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        $this->validator($request->all())->validate();
        $aslab = Aslab::create([
            'npm' => $request['npm'],
            'nama' => $request['nama'],
            'no_hp' => $request['no_hp'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $aslab->matakuliah()->attach($request->praktikum);
        return redirect()->route('login.show', ['url' => 'aslab'])->with('berhasil', "Registrasi berhasil!");
    }
}
