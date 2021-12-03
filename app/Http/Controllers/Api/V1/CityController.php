<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CityCollection;
use App\Http\Resources\V1\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CityCollection
     */
    public function index()
    {
        return new CityCollection(City::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return CityResource
     */
    public function show(City $city)
    {
        return new CityResource($city);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        //
    }


}
