<?php

namespace App\Http\Controllers;

use App\Models\WeatherLocations;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WeatherLocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('WeatherLocations/Index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WeatherLocations  $weatherLocations
     * @return \Illuminate\Http\Response
     */
    public function show(WeatherLocations $weatherLocations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeatherLocations  $weatherLocations
     * @return \Illuminate\Http\Response
     */
    public function edit(WeatherLocations $weatherLocations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WeatherLocations  $weatherLocations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeatherLocations $weatherLocations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeatherLocations  $weatherLocations
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeatherLocations $weatherLocations)
    {
        //
    }
}
