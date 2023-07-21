<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdateUserRequest;
use App\Models\Consultation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Nette\Utils\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
    public function update(UpdateUserRequest $request)
    {
        $update = Auth::user();
        $data = $request->validated(); 
        $update->update($data);
        //  $update->ImageUser()->save($image);
        toastr()->success('Les informations ont été mise a jour','',['timeOut'=> 5000]);
        // return redirect()->back()->with('success','information updated');
        return back();
    }

    public function update_image(UpdateUserRequest $request)
    { 
        $user = Auth::user();
        $data = $request->validated();
        if ($file = $request->file('photo') != null && !$file = $request->file('photo')->getError()) {
            $file = $request->file('photo')->getClientOriginalName();
            $store = $request->file('photo')->storeAs('images',$file,'public'); 
        
        $data['photo'] = $store;
        
        $user->update($data);

        toastr()->success('Votre image a été mise a jour avec success','',['timeOut'=> 5000]);

        return back(); 
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
   

    public function update_status(Request $request,$id)
    {
        $up = Consultation::whereRaw("(id=$id and status=0)");

        $up->update([
            'status'=>1,
            'fin_consultation'=>Carbon::now()
        ]);
        return back();
    }
    
}
