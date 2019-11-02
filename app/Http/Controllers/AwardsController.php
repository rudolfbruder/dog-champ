<?php

namespace App\Http\Controllers;

use App\Award;
use App\AwardType;
use App\Competition;
use App\Http\Requests\CreateAwardRequest;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('awards.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('awards.create')
            ->withDogs(auth()->user()->dogs)
            ->withAwardsTypes(AwardType::all())
            ->withCompetitions(Competition::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAwardRequest $request)
    {
        //

        Award::create([
            'dog_id' => $request->dog_id,
            'competition_id'  => $request->competition_id,
            'award_type_id'  => $request->award_type_id,
            'date'  => $request->date,
            'comment' => $request->comment,
            'user_id' => auth()->user()->id
        ]);

        $msg = 'Uspesne ste pridali nove ocenenie. Zoznam oceneni si viete prezried <a href="' . route('awards.my_awards') . '"> tu </a> ';
        session()->flash('success',  $msg);

        return redirect(route('awards.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function myAwards()
    {
        return view('awards.my_awards')
            ->withAwards(auth()->user()->awards()->paginate(10));
    }
}