<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function __construct() {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if (Auth::user()->userType==="doctor") {
            $all = User::whereNotIn('id',[Auth::user()->id])->where('userType','patient.e')->orderBy('lastLogin','desc')->get(); 
            $id = $request->post('user_id');
            $al = User::find($id); 
            // $id = $al->id;
            // if (is_null( $id = $all->id )) {
                
            // }
            $messages = Message::where(function ($query) use ($id){
                $query->where('user_sent', Auth::user()->id)->where('user_received', $id);
            })->orWhere(function ($query) use ($id){
                $query->where('user_received', auth()->user()->id)->where('user_sent', $id);
            })->orderBy('created_at')->get(); 
            // $selectID = 1;

            // $selectUserId = User::find($selectID);
            // $id = $selectUserId->id;

            // $cons = Message::all();
          
            // $cons = Message::where(function ($query) use ($id){
            //     $query->where('user_sent', Auth::user()->id)->where('user_received', $id);
            // })->orWhere(function ($query) use ($id){
            //     $query->where('user_received', auth()->user()->id)->where('user_sent', $id);
            // })->orderBy('created_at')->get();
            // $v = strval($cons);
            return view('admin.chatt', compact('all','messages'));
            //  return $messages;
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
        $current_id = Auth::user()->id;
        $user_id = $request->post('user_id');
        $message = $request->post('message');

        DB::insert('insert into messages (user_received,user_sent,contenu) VALUES(?,?,?)', array($user_id, $current_id, $message));

        return back();
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

    public function getMessage($id){ 
        
        $all = User::find($id);
        if (isset($all->id)) {
            # code...
        }
        
       
        // $idd = $all->id; 

        
       
        // $cons = Message::where(function ($query) use ($id){
        //     $query->where('user_sent', Auth::user()->id)->where('user_received', $id);
        // })->orWhere(function ($query) use ($id){
        //     $query->where('user_received', auth()->user()->id)->where('user_sent', $id);
        // })->orderBy('created_at')->get(); 

    //    return response()->json(view('admin.discusion',compact('cons','all'))->render());
        // return response()->json(view('admin.chatt')->with('cons',$cons)->with('all',$all)
        // ->render());
        // return view('admin.chatt', compact('cons','all'));
    }

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
