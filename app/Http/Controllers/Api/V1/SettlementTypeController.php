<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SettlementTypeCollection;
use App\Http\Resources\V1\SettlementTypeResource;
use App\Models\SettlementType;
use Illuminate\Http\Request;

class SettlementTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return SettlementTypeCollection
     */
    public function index()
    {
        return new SettlementTypeCollection(SettlementType::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SettlementType  $settlementType
     * @return SettlementTypeResource
     */
    public function show(SettlementType $settlementType)
    {
        return new SettlementTypeResource($settlementType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SettlementType  $settlementType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SettlementType $settlementType)
    {
        //TODO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SettlementType  $settlementType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SettlementType $settlementType)
    {
        //TODO
    }
}
