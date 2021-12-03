<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Zipcode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ZipcodeResource;
use App\Http\Resources\V1\ZipcodeCollection;


class ZipcodeController extends Controller
{

    /**
     * Display a listing of all zipcodes.
     *
     * @return ZipcodeCollection
     */
    public function index()
    {
        return new ZipcodeCollection(Zipcode::paginate());
    }

    /**
     * Display the requested zipcode data.
     *
     * @param Zipcode $zipcode
     * @return ZipcodeResource
     */
    public function show(Zipcode $zipcode)
    {
        return new ZipcodeResource($zipcode);
    }

    /**
     * Update the specified zipcode in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Zipcode $zipcode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zipcode $zipcode)
    {
        //TODO
    }

}
