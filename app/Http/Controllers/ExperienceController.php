<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreExperience;
use App\Experience;
use App\User;

class ExperienceController extends Controller
{
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExperience  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExperience $request, User $user)
    {
        $experiences = $request->validated();

        $user->addExperiences($experiences);

        return redirect()->route('create_experience', ['user_id' => $user->id])
                        ->with(['success' => "Expérience ajoutéé!! Cliquez sur Suivant pour continuer
                        ou Ajouter pour rajouter une expérience!"]);
    }
}
