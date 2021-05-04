<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\User;
use App\Mail\Bienvenue;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        
        $validated = $request->validated();

        //$pass = $request->input('password');

        $user = User::create($validated);

        // Send Mail to User
        //\Mail::to($user)->send(new Bienvenue($user));


        return redirect()->route('create_experience', ['user_id' => $user->id]);
    }

   
    

   

    
}
