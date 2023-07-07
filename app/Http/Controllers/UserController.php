<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profile = User::find($id);
        return view('pages.page-profile', compact('profile'));
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
    public function update(Request $request, $id)
    {
        $data =Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:20'],
            'prenom'=>['required','string','max:10'],
            'postnom'=>['string','max:10'],
            'Occupation'=>['string','max:20','required'],
            'phone'=>['string'],
            'dateNaissance'=>['required','date'],
            'sexe'=>['required','string','max:6'], 
            'adresse'=>['required','string'], 
            'bio'=>['string']
        ]);
   

        $update = User::find($id);
        $update->update([
            'name' => $request->name,
            'prenom'=> $request->prenom,
            'postnom'=>$request->postnom,
            'dateNaissance'=>$request->dateNaissance,
            'phone'=>$request->phone,
            'sexe'=>$request->sexe,
            'adresse'=>$request->adresse,
            'Occupation'=>$request->Occupation,
            'bio'=>$request->bio,
        ]);
        
        return back()->with('message','information updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
   

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    
}
