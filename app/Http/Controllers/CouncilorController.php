<?php

namespace App\Http\Controllers;

use App\Councilor;
use Illuminate\Http\Request;

class CouncilorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

	/**
     * Return a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
		if ($request->query('showSupports') == 'true') {
			return Councilor::with(['supports'])->get();
		} else {
			return Councilor::all();
		}
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
     * @param  \App\Councilor  $councilor
     * @return \Illuminate\Http\Response
     */
    public function show(Councilor $councilor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Councilor  $councilor
     * @return \Illuminate\Http\Response
     */
    public function edit(Councilor $councilor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Councilor  $councilor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Councilor $councilor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Councilor  $councilor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Councilor $councilor)
    {
        //
    }
}
