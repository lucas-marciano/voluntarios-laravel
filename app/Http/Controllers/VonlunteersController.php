<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use App\Http\Requests\VolunteerRequest;

class VonlunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vonlunteers = Volunteer::all();

        return view('vonlunteer.index', compact('vonlunteers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vonlunteer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\VolunteerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VolunteerRequest $request)
    {
        Volunteer::create($request->all());
        return redirect()->route('vonlunteer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('vonlunteer.show', compact('volunteer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('vonlunteer.edit', compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\VolunteerRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(VolunteerRequest $request, $id)
    {
        $volunteer = Volunteer::findOrFail($id);

        $volunteer->update($request->all());

        return redirect()->route('vonlunteer.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();
        return redirect()->route('vonlunteer.index');
    }
}
