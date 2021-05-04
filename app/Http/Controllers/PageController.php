<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Experience;
use PDF;

class PageController extends Controller
{
    public function preview($user_id)
    {
        $id = (int) $user_id;

        $user = User::find($user_id);
        
        $experiences = $user->experiences()->orderBy('begin', 'asc')->get();
        $educations = $user->educations()->orderBy('begin', 'asc')->get();
        $skills = $user->skills()->get();
        $interests = $user->interests()->get();

        return view('resume.preview', compact('user', 'experiences', 'educations', 'skills', 'interests'));
    }

    public function generatePDF($user_id)
    {
        $id = (int) $user_id;
        $user = User::find($user_id);

        $experiences = $user->experiences;
        $educations = $user->educations;
        $skills = $user->skills;
        $interests = $user->interests;

        $data = ['name' => $user->firstname.' '.$user->lastname,
                    'birthday' =>  $user->birthday,
                    'city' =>$user->city,
                    'address'=>$user->address,
                    'email' => $user->email,
                    'phone' => $user->phone,
                    'experiences' => $experiences,
                    'educations' => $educations,
                    'skills' => $skills,
                    'interests' => $interests
        ];


        $filename = 'CV_'.$user->firstname.'_'.$user->lastname.'.pdf';

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download($filename);

        return view('myPDF', $data);

    }
}
