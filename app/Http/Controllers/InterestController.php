<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreInterest;
use App\Interest;
use App\User;


class InterestController extends Controller
{ 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('interests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInterest  $request
     * @return \Illuminate\Http\Response
    */
    public function store(StoreInterest $request, User $user)
    {
        $interests = $request->validated();

        $user->addInterests($interests);

        return redirect()->route('create_interest', ['user_id' => $user->id])
                        ->with(['success' => "Centre d'intérêts ajouté! Cliquez sur Générer aperçu pour continuer
                        ou Ajouter pour rajouter un autre centre d'intérêt"]);
    }
}
