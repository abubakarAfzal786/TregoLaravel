<?php

namespace App\Http\Controllers;

use App\Probe;
use Illuminate\Http\Request;

class ProbeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.probe.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.probe.create');

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
     * @param  \App\Probe  $probe
     * @return \Illuminate\Http\Response
     */
    public function show(Probe $probe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Probe  $probe
     * @return \Illuminate\Http\Response
     */
    public function edit(Probe $probe)
    {
        return view('pages.probe.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Probe  $probe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Probe $probe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Probe  $probe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Probe $probe)
    {
        //
    }
}
