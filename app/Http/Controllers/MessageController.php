<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mime\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::user()->userType==="doctor") {
            $all = User::whereNotIn('id',[Auth::user()->id])->where('userType','patient.e')->orderBy('lastLogin','desc')->get(); 
           
            return view('admin.chat', compact('all'));
        } else {
           
            $all = User::whereNotIn('id',[Auth::user()->id])->where('userType','doctor')->orderBy('lastLogin','desc')->get(); 
            return view('user.chat', compact('all'));
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $i = $request->id;
        // $all = User::find($i)->first();
        //  return response()->json(view('admin.show_user',compact('all'))->render()); 
           
        if (Auth::user()->userType==="doctor") {
            $all = User::find($id);
            return response()->json(view('admin.show_user',compact('all'))->render()); 
           
            // return view('admin.show_user', compact('all'));
        } else {
            // $i = User::find($id);
            // $find = DB::table("messages")
            // ->Join("users", function($join){
            //     $join->on("users.id", "=", "messages.sender_user");
            // })
            // ->join("users as u", function($join){
            //     $join->on("u.id", "=", "messages.sender_user");
            // })
            // // ->where("receiver_user",Auth::user()->id)
            // // ->where("sender_user",$id)
            // ->get();
            
            $all = User::find($id);
            return response()->json(view('admin.show_user',compact('all'))->render());
        }
    }

    // public function getData($id){ 
    //     $user = User::find($id);

    //     return response()->json(view('admin.show_user',compact('user'))->render()); 
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
