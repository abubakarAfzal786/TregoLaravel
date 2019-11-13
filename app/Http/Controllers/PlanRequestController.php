<?php

namespace App\Http\Controllers;

use App\PlanRequest;
use Illuminate\Http\Request;

class PlanRequestController extends Controller
{
    /**
     * Create a new DController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planRequest=PlanRequest::where('active', 1)->orderBy('createdAt', 'desc')->take(20)->get();
       
        return view('pages.plan_requests.index')->with('planRequest',$planRequest);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.plan_requests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PlanRequest $planRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,planRequest $planRequestld,$id)
    {
        $planRequest= planRequest::all()->where('id',$id)->first();
        return view('pages.plan_requests.edit')->with('planRequest',$planRequest);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanRequest $planRequest)
    {
        $updateObj = TravelRequest::all()->where('id', $request->id)->first();
        $updateObj->stato_richiesta = $request->stato_richiesta;
        $updateObj->contratto = $request->contratto;
        $updateObj->tipo_trasporto = $request->tipo_trasporto;
        $updateObj->planCustomId = $request->planCustomId;
        $updateObj->indirizzo_carico = $request->indirizzo_carico;
        $updateObj->descrizione_cdc_carico = $request->descrizione_cdc_carico;
        $updateObj->codice_cdc_scarico = $request->codice_cdc_scarico;
        $updateObj->indirizzo_scarico = $request->indirizzo_scarico;
        $updateObj->descrizione_cdc_scarico = $request->descrizione_cdc_scarico;
        $updateObj->adr = $request->adr;
        $updateObj->vincolo_di_temperatura = $request->vincolo_di_temperatura;
        $updateObj->confezionato = $request->confezionato;
        $updateObj->numero_colli = $request->numero_colli;
        $updateObj->note = $request->note;
        $updateObj->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanRequest $planRequest)
    {
        //
    }
}
