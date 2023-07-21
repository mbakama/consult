<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Repo\ConversationRespo;
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
    private $respo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ConversationRespo $respo)
    {
        $this->middleware('guest');
        $this->respo = $respo;
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
            'name' => ['required', 'string', 'max:20'],
            'prenom'=>['required','string','max:10'],
            'dateNaissance'=>['required','date'],
            'sexe'=>['required','string','max:6'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'adresse'=>['required','string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $defautImage = 'images/6596121.png';
        $useType = 'doctor';
        $useType1 = 'patient.e'; 

        // apres verification de l'existance des users ou non dans la table User
        // on attribue un usetype au premier à se connecter comme doctor et les autres seront des patients
         if ($this->respo->verification()->count()<1) { 
            return User::create([
                'name' => $data['name'],
                'prenom'=> $data['prenom'],
                'userType'=>$useType,
                'dateNaissance'=>$data['dateNaissance'],
                'sexe'=>$data['sexe'],
                'adresse'=>$data['adresse'],
                'email' => $data['email'], 
                'password' => Hash::make($data['password']),
                'photo'=>$defautImage
            ]);   
        
        } else{
            return User::create([
                'name' => $data['name'],
                'prenom'=> $data['prenom'],
                'userType'=>$useType1,
                'dateNaissance'=>$data['dateNaissance'],
                'sexe'=>$data['sexe'],
                'adresse'=>$data['adresse'],
                'email' => $data['email'], 
                'password' => Hash::make($data['password']),
                'photo'=>$defautImage
            ]);  
        }
        
    }
}
