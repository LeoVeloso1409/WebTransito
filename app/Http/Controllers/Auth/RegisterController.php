<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\data;

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
    }

    /**
     * Get a validator for an incoming registration data.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data,

        [
            'nome' => 'required',
            'matricula' => 'required|size:7|unique:users,matricula',
            'email' => 'required|email',
            'orgao' => 'required',
            'unidade' => 'required',
            'funcao' => 'required',
            'status' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ],

        [
            'nome.required' => '* Obrigatório',
            'matricula.required' => '* Obrigatório',
            'matricula.size' => 'O campo Matrícula deve conter 7 dítgitos numéricos',
            'matricula.unique' => 'Este número de Matrícula já existe',
            'email.required' => '* Obrigatório',
            'email.email' => 'O campo Email não foi preenchido corretamente',
            'orgao.required' => '* Obrigatório',
            'unidade.required' => '* Obrigatório',
            'funcao.required' => '* Obrigatório',
            'status.required' => '* Obrigatório',
            'password.required' => '* Obrigatório',
            'password.min' => 'O campo Senha deve conter no mínimo 6 caracteres',
            'password_confirmation.confirmed' => 'O campo Confirmar Senha deve ser igual ao campo Senha',
            'password_confirmation.required' => '* Obrigatório'
        ]

    );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $user = User::create([
            'nome' => $data['nome'],
            'matricula' => $data['matricula'],
            'email' => $data['email'],
            'orgao' => $data['orgao'],
            'unidade' => $data['unidade'],
            'funcao' => $data['funcao'],
            'status' => $data['status'],
            'password' => Hash::make($data['password']),
        ]);

        //dd($user);

        return $user;
    }
}
