<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResourcePrimalac;
use App\Models\Primalac;
use Illuminate\Http\Request;

class PrimalacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $primaoci = Primalac::all();
        return ResourcePrimalac::collection($primaoci);
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
     * @param  \App\Models\Primalac  $primalac
     * @return \Illuminate\Http\Response
     */
    public function show(Primalac $primalac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Primalac  $primalac
     * @return \Illuminate\Http\Response
     */
    public function edit(Primalac $primalac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Primalac  $primalac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Primalac $primalac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Primalac  $primalac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Primalac $primalac)
    {
        $primalac->delete();
        return response()->json(['Primalac je obrisan', new ResourcePrimalac($primalac)]);
    }
}
