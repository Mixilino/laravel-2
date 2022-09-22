<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\Http\Request;
use App\Http\Resources\ResourceKurir;
use Illuminate\Support\Facades\Validator;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurirs = Kurir::all();
        return ResourceKurir::collection($kurirs);
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
     * @param  \App\Models\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function show(Kurir $kurir)
    {
        return new ResourceKurir($kurir);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function edit(Kurir $kurir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kurir $kurir)
    {
        $validator = Validator::make($request->all(), [
            'nazivFirme' => 'required|string',
            'pib' => 'required|integer',
            'maticniBroj' => 'required|integer',
            'adresa' => 'required|string',
            'website' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška prilikom ažuriranja kurira', $validator->errors()]);
        }

        $kurir->nazivFirme = $request->nazivFirme;
        $kurir->pib = $request->pib;
        $kurir->maticniBroj = $request->maticniBroj;
        $kurir->adresa = $request->adresa;
        $kurir->website = $request->website;

        $kurir->save();

        return response()->json(['Kurir je ažuriran', new ResourceKurir($kurir)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kurir $kurir)
    {
        $kurir->delete();
        return response()->json(['Kurir je obrisan', new ResourceKurir($kurir)]);
    }
}
