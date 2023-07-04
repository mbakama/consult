<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.chat');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function search()
    {
        $users = User::where('name', 'like', '%'. request('search'). '%')->get();
        // return view('admin.chat', compact('users'));

        return response()->json($users);
    }

   
}
