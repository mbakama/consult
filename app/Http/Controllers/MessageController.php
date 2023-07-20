<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Message;
use App\Repo\ConversationRespo;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    private $respo;
    private $auth;
    public function __construct(ConversationRespo $respo, AuthManager $auth) {
        // $this->middleware('auth');
        $this->auth = $auth;
        $this->respo = $respo;
    }
    public function index()
    {
        // if (Auth::user()->userType==="doctor") {
        //     $all = User::whereNotIn('id',[Auth::user()->id])->where('userType','patient.e')->orderBy('lastLogin','desc')->get(); 
        //     $id = $request->post('user_id');
        //     $al = User::find($id); 
      
        //     $messages = Message::where(function ($query) use ($id){
        //         $query->where('user_sent', Auth::user()->id)->where('user_received', $id);
        //     })->orWhere(function ($query) use ($id){
        //         $query->where('user_received', auth()->user()->id)->where('user_sent', $id);
        //     })->orderBy('created_at')->get(); 
          
        //     return view('admin.chatt', compact('all','messages'));
           
        // } else {
           
        //     $all = User::whereNotIn('id',[Auth::user()->id])->where('userType','doctor')->orderBy('lastLogin','desc')->get(); 
        //     return view('user.chat', compact('all'));
        // }

        if (Auth::user()->userType=='doctor') { 
            return view('pages.chat1', ['all' => $this->respo->getConversationDoctor($this->auth->user()->id)]);
        }
        // return view('users.', ['all' => $this->respo->getConversation($this->auth->user()->id)]);
        return view('pages.chat1',['all' => $this->respo->getConversationDoctor($this->auth->user()->id)]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user,Request $request)
    {
        // $current_id = $this->auth->user()->id;
        // $user_id = $request->post('user_id');
        // $message = $request->post('message');

        // DB::insert('insert into messages (user_received,user_sent,contenu) VALUES(?,?,?)', array($user_id, $current_id, $message));

        $this->respo->insertConversation(
            $request->post('message'),
            $this->auth->user()->id,
            $user->id 
        );
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
       
        // return view('admin.show',[
        //     'all' => $this->respo->getConversation($this->auth->user()->id),
        //     'user'=>$user,
        //     'messages'=>$this->respo->getMessagesFor($this->auth->user()->id,$user->id)->get()
        //  ]);
        return view('pages.discusions',[
                'all' => $this->respo->getConversationDoctor($this->auth->user()->id),
                #'alls'=>$this->respo->getConversationUser($this->auth->user()->id),
                'user'=>$user,
                'messages'=>$this->respo->getMessagesFor($this->auth->user()->id,$user->id)->get(),
                
        ]);
        // if (Auth::user()->userType==="doctor") {
        //     $all = User::find($id);
        //     return response()->json(view('admin.show_user',compact('all'))->render()); 
        // } else { 
        //     $all = User::find($id);
        //     return response()->json(view('admin.show_user',compact('all'))->render());
        // }
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
        $find = Message::find($id);
        $find->delete();

        return back();
    }
}
