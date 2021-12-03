<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SettlementCollection;
use App\Http\Resources\V1\StateCollection;
use App\Http\Resources\V1\StateResource;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return StateCollection
     */
    public function index()
    {
        return new StateCollection(State::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return StateResource
     */
    public function show(State $state)
    {
        return new StateResource($state);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        //TODO
    }

}
