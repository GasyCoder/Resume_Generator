<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEducation;
use App\Education;
use App\User;


class EducationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('educations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEducation  $request
     * @return \Illuminate\Http\Response
    */
    public function store(StoreEducation $request, User $user)
    {
        $educations = $request->validated();

        $user->addEducations($educations);

        return redirect()->route('create_education', ['user_id' => $user->id])
                ->with(['success' => 'Formation ajoutéé!! Cliquez sur Suivant pour continuer
                ou Ajouter pour rajouter une formation!']);
    }
}
