<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartReq;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $objects = Participant::orderBy('id', 'desc')->get();

        return view('participant.index', compact('objects'));
    }

    public function create1()
    {
        return view('participant.create1');
    }

    public function create2()
    {
        return view('participant.create2');
    }

    /**
     * Handle the incoming request.
     */
    public function store(PartReq $request)
    {
        $data = new Participant();
        $data->f_name = $request->input('f_name');
        $data->l_name = $request->input('l_name');
        $data->p_number = $request->input('p_number');
        $data->email = $request->input('email');
        $data->job = $request->input('job');
        $data->profession = $request->input('profession');
        $data->who_f_hackathon = $request->input('who_f_hackathon');
        $data->it_experience = $request->input('it_experience');
        $data->hackathon_experience = $request->input('hackathon_experience');
        $data->idea = $request->input('idea');
        $data->about = $request->input('about');
        $data->team_name = $request->input('team_name');


        $data->save();

        return redirect('/')->with('success', 'Вы успешно зарегистрировались');
    }
}
