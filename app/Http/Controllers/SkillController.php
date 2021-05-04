<?php

namespace App\Http\Controllers;



use App\Http\Requests\StoreSkill;
use App\Skill;
use App\User;

class SkillController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSkill  $request
     * @return \Illuminate\Http\Response
    */
    public function store(StoreSkill $request, User $user)
    {
        $skills = $request->validated();

        $user->addSkills($skills);

        return redirect()->route('create_skill', ['user_id' => $user->id])
        ->with(['success' => 'Compétence ajoutéé!! Cliquez sur Suivant pour continuer
        ou Ajouter pour rajouter compétence!']);
    }
}
