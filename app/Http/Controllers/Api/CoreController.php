<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Municipality;
use App\Models\Settlement;
use App\Models\SettlementType;
use App\Models\State;
use App\Models\Zipcode;
use App\Models\Zone;
use Illuminate\Support\Facades\Schema;

class CoreController extends Controller
{

    public function insertZones($finalZipcodesArray) {

        $zonesInsertArray = [];
        foreach($finalZipcodesArray as $zipcodeDataRow) {
            $zonesInsertArray[] = $zipcodeDataRow['d_zona'];
            $zonesUniqueValues = array_unique($zonesInsertArray);
        }
        $zone = new Zone();
        foreach($zonesUniqueValues as $zoneType) {
            $insert = [
                'type' => $zoneType,
            ];
            $res = $zone->create($insert);
        }

    }

    public function insertSettlementTypes($finalZipcodesArray) {

        $settlementTypesInsertArray = [];
        foreach($finalZipcodesArray as $zipcodeDataRow) {
            $settlementTypesInsertArray[] = [$zipcodeDataRow['c_tipo_asenta'] => $zipcodeDataRow['d_tipo_asenta']];
            $settlementTypesUniqueValues = array_unique($settlementTypesInsertArray);
        }
        $settlementType = new Settlement();
        foreach($settlementTypesUniqueValues as $settlementTypes) {
            $insert = [
                'id' => $settlementTypes['c_tipo_asenta'],
                'name' => $settlementTypes['d_tipo_asenta'],
            ];
            $res = $settlementType->create($insert);
        }

    }

    public function insertSettlements($finalZipcodesArray) {

        $settlementsInsertArray = [];
        foreach($finalZipcodesArray as $zipcodeDataRow) {
            $settlementsInsertArray[] = [$zipcodeDataRow['id_asenta_cpcons'] => $zipcodeDataRow['d_asenta']];
            $settlementsUniqueValues = array_unique($settlementsInsertArray);
        }
        $settlement = new Settlement();
        foreach($settlementsUniqueValues as $settlements) {
            $insert = [
                'id' => $settlements['id_asenta_cpcons'],
                'name' => $settlements['d_asenta'],
            ];
            $res = $settlement->create($insert);
        }

    }

    public function insertCities($finalZipcodesArray) {

        $cityInsertArray = [];
        foreach($finalZipcodesArray as $zipcodeDataRow) {
            $cityInsertArray[] = [$zipcodeDataRow['c_cve_ciudad'] => $zipcodeDataRow['d_ciudad']];
            $cityUniqueValues = array_unique($cityInsertArray);
        }
        $city = new Settlement();
        foreach($cityUniqueValues as $cities) {
            $insert = [
                'id' => $cities['c_cve_ciudad'],
                'name' => $cities['d_ciudad'],
            ];
            $res = $city->create($insert);
        }

    }

    public function insertMunicipalies($finalZipcodesArray) {

        $municipalityInsertArray = [];
        foreach($finalZipcodesArray as $zipcodeDataRow) {
            $municipalityInsertArray[] = [$zipcodeDataRow['c_mnpio'] => $zipcodeDataRow['D_mnpio']];
            $municipalityUniqueValues = array_unique($municipalityInsertArray);
        }
        $municipality = new Municipality();
        foreach($municipalityUniqueValues as $municipalities) {
            $insert = [
                'id' => $municipalities['c_mnpio'],
                'name' => $municipalities['D_mnpio'],
            ];
            $res = $municipality->create($insert);
        }

    }

    public function insertStates($finalZipcodesArray) {

        $stateInsertArray = [];
        foreach($finalZipcodesArray as $zipcodeDataRow) {
            $stateInsertArray[] = [$zipcodeDataRow['c_estado'] => $zipcodeDataRow['d_estado']];
            $stateUniqueValues = array_unique($stateInsertArray);
        }
        $state = new State();
        foreach($stateUniqueValues as $states) {
            $insert = [
                'id' => $states['c_estado'],
                'name' => $states['d_estado'],
            ];
            $res = $state->create($insert);
        }

    }

    public function insertZipcodes($finalZipcodesArray) {

        $zipcodeInsertArray = [];
        foreach($finalZipcodesArray as $zipcodeDataRow) {
            $zipcode = new Zipcode();
            $insert = [
                'code' => $zipcodeDataRow['d_codigo'],
                'city_id' => $zipcodeDataRow['c_cve_ciudad'],
                'municipality_id' => $zipcodeDataRow['c_mnpio'],
                'settlement_id' => $zipcodeDataRow['id_asenta_cpcons'],
                'state_id' => $zipcodeDataRow['c_estado'],
                'zone_id' => $zipcodeDataRow[''],
            ];

            $res = $zipcode->create($insert);
        }

    }



    public function readZipcodesFile() {

        //Read zipcodes data from this oficial external file (sownloaded from the Correos de Mexico Website:
        //https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/CodigoPostal_Exportar.aspx)
        $fp = fopen("./resources/docs/zipcodes.txt", "r");
        $data = fread($fp, filesize("./resources/docs/zipcodes.txt"));
        $data = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $data);
        fclose($fp);

        return $data;

    }

    public function truncateTables() {

        Schema::disableForeignKeyConstraints();
        Zipcode::truncate();
        Zone::truncate();
        Settlement::truncate();
        SettlementType::truncate();
        City::truncate();
        Municipality::truncate();
        State::truncate();
        Schema::enableForeignKeyConstraints();

    }

}
