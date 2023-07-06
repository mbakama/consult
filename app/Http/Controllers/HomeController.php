<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->userType=== "doctor") {
            $all = Message::all();
            $all = User::where('userType','!=','doctor')->get(); 
            return view('admin/dashboard', compact(['all','all']));
        } else{
            return view('user.dashboard'); 
        }
     
    } 
    public function listPatients(){
        $all = User::where('userType','!=','doctor')->get(); 
        return view('admin.pages-patients', compact('all'));
    }
    public function getByIdPatient($id)
    {
        $all = User::find($id);

        return view('admin.pages-view-profile', compact('all'));
    }
    public function show($id){
        $profile = User::find($id);
        return view('pages.page-profile', compact('profile'));
    }
}
