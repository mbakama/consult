<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            // get le doctor seulement
            $all = User::whereNotIn('id',[Auth::user()->id])->where('userType','doctor')->orderBy('lastLogin','desc')->get(); 
            return view('user.chat', compact('all'));
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
