<?php

namespace App\Http\Controllers;

use App\TravelRequest;
use Illuminate\Http\Request;

class TravelRequestController extends Controller
{
    /**
     * Create a new TravelRequest instance.
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
        $allTravelRequest = TravelRequest::where('active', 1)->orderBy('createdAt', 'desc')->take(10)->get();
        return view('pages.travel_requests.index')->with('travelRequest', $allTravelRequest);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.travel_requests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'stato_richiesta' => 'required',
            'contratto' => 'required',
            'tipo_trasporto' => 'required',
            'planCustomId' => 'required',
            'indirizzo_carico' => 'required',
            'descrizione_cdc_carico' => 'required',
            'codice_localita_scarico' => 'required',
            'codice_cdc_scarico' => 'required',
            'indirizzo_scarico' => 'required',
            'descrizione_cdc_scarico' => 'required',
            'adr' => 'required',
            'vincolo_di_temperatura' => 'required',
            'confezionato' => 'required',
            'numero_colli' => 'required',
            'note' => 'required',
        ]);


        $travelRequest = new TravelRequest();
        return $travelRequest->saveRequest($request);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TravelRequest $travelRequest
     * @return \Illuminate\Http\Response
     */
    public function show(TravelRequest $travelRequest)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TravelRequest $travelRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(TravelRequest $travelRequest)
    {
        return view('pages.travel_requests.edit')->with('travelRequest', $travelRequest);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\TravelRequest $travelRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TravelRequest $travelRequest)
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
     * @param  \App\TravelRequest $travelRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, TravelRequest $travelRequest)
    {
        $travelRequest->delete();
        return redirect()->back();
    }
}
