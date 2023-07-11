<?php

namespace App\Http\Controllers;


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
        $update = User::find($id);
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
       
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo');
            $image = Image::make($imagePath);
           
            $imageName = $imagePath->getClientOriginalName();
            $image->save(storage_path('images'.$imageName));

            if($update->photo){
                Storage::delete('public/'.$update->photo);
            }
            $update->photo = 'profiles/'.$imageName;
        }

        // $name = $request->file('photo')->getClientOriginalName(); 
        // $path = $request->file('photo')->storeAs('images',$name,'public');
       
        
        
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
        ]
    );
        //  $update->ImageUser()->save($image);
        toastr()->success('Les informations ont été mise a jour','',['timeOut'=> 5000]);
        // return redirect()->back()->with('success','information updated');
        return back();
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
