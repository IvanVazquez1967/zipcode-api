<?php

namespace App\Http\Resources\V1;

use App\Models\Zipcode;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use JsonSerializable;
use App\Models\Zone;
use App\Models\City;
use App\Models\State;
use App\Models\Settlement;
use App\Models\Municipality;
use App\Models\SettlementType;


class ZipcodeResource extends JsonResource
{
    /**
     * @var State
     */
    private $state;

    /**
     * @var City
     */
    private $city;

    /**
     * @var Municipality
     */
    private $municipality;

    /**
     * @var Settlement
     */
    private $settlement;

    /**
     * @var SettlementType
     */
    private $settlementType;

    /**
     * @var Zone
     */
    private $zone;


    function __construct($resource) {

        parent::__construct($resource);

        $this->state = new State;
        $this->city = new City;
        $this->municipality = new Municipality;
        $this->settlement = new Settlement;
        $this->settlementType = new SettlementType;
        $this->zone = new Zone;
    }


    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        $zipcode = Zipcode::where('code',$this->code)->first();

        if($zipcode == null) {
            return [
                'status' => false,
                'code' => 404,
            ];
        } else {
            return [
                'status' => true,
                'payload' => [
                    array(
                        'id' => $this->id,
                        'code' => $this->code,
                        'settlement' => $this->settlement->getSettlementName($this->settlement_id),
                        'settlement_type' => $this->settlement->getSettlementTypeName($this->settlement_id),
                        'municipality' => $this->municipality->getMunicipalityName($this->municipality_id),
                        'city' => $this->city->getCityName($this->city_id),
                        'zone' => $this->zone->getZoneType($this->zone_id),
                        'state' => [
                            'id' => $this->state_id,
                            'name' => $this->state->getStateName($this->state_id)
                        ]
                    )
                ]
            ];
        }

    }

}
