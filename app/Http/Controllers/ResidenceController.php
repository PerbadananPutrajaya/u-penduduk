<?php

namespace App\Http\Controllers;

use App\Residence;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the residents
        $residences = Residence::all();

        // load the view and pass the residents
        return view('residences.index', compact('residences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (app/views/residences/create.blade.php)
        return View::make('residences.create');
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
        Residence::create($input);
        
        return redirect('residences');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $residence = Residence::findOrFail($id);

        return view('residences.show', compact('residence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $residence = Residence::findOrFail($id);

        return view('residences.edit', compact('residence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $residence = Residence::findOrFail($id);
        $input = Request::all();
        $residence->update($input);

        return redirect('residences');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $residence = Residence::findOrFail($id);
        $residence->delete();

        return redirect('residences');
    }
}
