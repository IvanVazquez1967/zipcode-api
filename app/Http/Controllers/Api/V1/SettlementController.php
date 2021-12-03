<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SettlementCollection;
use App\Http\Resources\V1\SettlementResource;
use App\Models\Settlement;
use Illuminate\Http\Request;

class SettlementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return SettlementCollection
     */
    public function index()
    {
        return new SettlementCollection(Settlement::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Settlement  $settlement
     * @return SettlementResource
     */
    public function show(Settlement $settlement)
    {
        return new SettlementResource($settlement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Settlement  $settlement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settlement $settlement)
    {
        //TODO
    }

}
