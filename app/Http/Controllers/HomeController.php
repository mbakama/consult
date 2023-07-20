<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Repo\ConversationRespo;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    private $respo;
    private $auth;
    public function __construct(ConversationRespo $respo, AuthManager $auth) {
        $this->middleware('auth');
        $this->auth = $auth;
        $this->respo = $respo;
    }
    public function index()
    {
        if (Auth::user()->userType=== "doctor") {
            $all_users_consult = $this->respo->countConsultingUsers();
            $all_users_homme = $this->respo->countUserBySexe();
            $all_users_femme = $this->respo->countUsersBySexe();
            $all_messages = $this->respo->countMessages();
            return view('admin/dashboard', 
            compact(['all_messages','all_users_femme','all_users_homme','all_users_consult']));
        } else{
            return view('user.dashboard'); 
        } 
    } 
    public function listPatients(){
        $all = User::where('userType','!=','doctor')->get(); 
        return view('admin.pages-patients', compact('all'));
    }
    public function getByIdPatient(User $all)
    {
        // $all = User::find($id);

        return view('pages.pages-view-patient-profile', compact('all'));
    }
    public function show($id){
        // $profile = User::find($id);
        // return view('pages.page-profile', compact('profile'));
    }
    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }
}
