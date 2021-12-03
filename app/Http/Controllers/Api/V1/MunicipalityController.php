<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\MunicipalityCollection;
use App\Http\Resources\V1\MunicipalityResource;
use App\Models\Municipality;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return MunicipalityCollection
     */
    public function index()
    {
        return new MunicipalityCollection(Municipality::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municipality  $municipality
     * @return MunicipalityResource
     */
    public function show(Municipality $municipality)
    {
        return new MunicipalityResource($municipality);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipality $municipality)
    {
        //TODO
    }

}
