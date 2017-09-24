<?php

namespace App\Http\Controllers;

use App\Resident;
use Request;
use View;
use Wildside\Userstamps\Userstamps;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the residents
        $residents = Resident::all();

        // load the view and pass the residents
        return view('residents.index', compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (app/views/residents/create.blade.php)
        return View::make('residents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::all();
        Resident::create($input);
        return redirect('residents');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resident = Resident::findOrFail($id);
        return view('residents.show', compact('resident'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resident = Resident::findOrFail($id);
        return view('residents.edit', compact('resident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resident = Resident::findOrFail($id);
        $input = Request::all();
        $resident->update($input);
        return redirect('residents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resident = Resident::findOrFail($id);
        $resident->delete();

        return redirect('residents.index');
    }

    /**
     * Check user nationality than storeByNric or storeByPassport
     *
     */
    public function storeUserProfile(Request $request){
        $input = Request::all();
        $nationality = $input['nationality'];
        $is_malaysian = ($nationality == 'Malaysian') ? ResidentController::storeByNric($request) : ResidentController::storeByPassport($request);
        return redirect('dashboard');
    }

    /**
     * Store user info by nric
     *
     */
    public function storeByNric($request) {
        $input = Request::all();
        $resident = Resident::updateOrCreate(
            ['nric' => $input['nric']],[
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'nationality' => $input['nationality'],
                'nric' => $input['nric'],
                'passport' => $input['passport'],
                'date_of_birth' => $input['date_of_birth'],
                'gender' => $input['gender'],
                'blood_group' => $input['blood_group'],
                'user_id' => auth()->id(),
            ]
        );
    }

    /**
     * Store user info by passport
     *
     */
    public function storeByPassport($request) {
        $input = Request::all();
        $resident = Resident::updateOrCreate(
            ['passport' => $input['passport']],[
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'nationality' => $input['nationality'],
                'nric' => $input['nric'],
                'passport' => $input['passport'],
                'date_of_birth' => $input['date_of_birth'],
                'gender' => $input['gender'],
                'blood_group' => $input['blood_group'],
                'user_id' => auth()->id(),
            ]
        );
    }
}
