<?php

namespace App\Http\Controllers;

use App\Dog;
use App\Http\Requests\Dog\CreateDogRequest;
use Illuminate\Http\Request;
use App\Race;

class DogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dogs.create')
            ->withRaces(Race::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDogRequest $request)
    {
        //
        $data = $request->only(['name', 'nick_name', 'date_of_birth', 'gender', 'race_id', 'place_of_birth', 'private', 'about']);

        Dog::create(
            [
                'name' => $data['name'],
                'nick_name' =>  $data['nick_name'],
                'date_of_birth'  =>  $data['date_of_birth'],
                'gender'  =>  $data['gender'],
                'race_id'  =>  $data['race_id'],
                'place_of_birth'  =>  $data['place_of_birth'],
                'private'  =>  $data['private'],
                'about'  =>  $data['about'],
                'user_id' => auth()->user()->id
            ]
        );

        return redirect(route('dogs.index'));
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
}