<?php

namespace App\Http\Controllers;

use App\Models\ImageUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Nette\Utils\Image;

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
            'bio'=>['string'],
            'photo'=>['required','image','mimes:jpg,png,jpeg','max:2048']
        ]);
       
        if (empty($request->file('photo'))) {
            return back();
        } else{
        $name = $request->file('photo')->getClientOriginalName(); 
        $path = $request->file('photo')->storeAs('images',$name,'public');
        // $path = $request->file('photo')->store('')
       
        // $image = new ImageUser();
        // $image->path = $path;
        
        $update = User::find($id);
        $update->update(
            [
            'name' => $request->name,
            'prenom'=>$request->prenom,
            'postnom'=>$request->postnom,
            'Occupation'=>$request->Occupation,
            'phone'=>$request->phone,
            'dateNaissance'=>$request->dateNaissance,
            'sexe'=>$request->sexe, 
            'adresse'=>$request->adresse, 
            'bio'=>$request->bio,
            'photo'=>$path
        ]
    );
        //  $update->ImageUser()->save($image);
        
        return back()->with('message','information updated');
    }
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
