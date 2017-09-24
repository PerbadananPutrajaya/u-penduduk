<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resident;
use App\Residence;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function residentsList() {
        // get all the residents
        $residents = Resident::all();
        // load the view and pass the residents
        return view('residents.index', compact('residents'));
    }

    public function residenceList() {
        // get all the residences
        $residences = Residence::all();
        // load the view and pass the residences
        return view('residences.index', compact('residences'));
    }
}
