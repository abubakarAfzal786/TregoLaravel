<?php

namespace App\Http\Controllers;

use App\datawarehouse;
use Illuminate\Http\Request;

class datawarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.datawarehouse.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.datawarehouse.create');

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
     * @param  \App\datawarehouse  $datawarehouse
     * @return \Illuminate\Http\Response
     */
    public function show(datawarehouse $datawarehouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\datawarehouse  $datawarehouse
     * @return \Illuminate\Http\Response
     */
    public function edit(datawarehouse $datawarehouse)
    {
        return view('pages.datawarehouse.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\datawarehouse  $datawarehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datawarehouse $datawarehouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\datawarehouse  $datawarehouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(datawarehouse $datawarehouse)
    {
        //
    }
}
