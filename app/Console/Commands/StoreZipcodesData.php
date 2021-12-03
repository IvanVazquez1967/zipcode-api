<?php

namespace App\Console\Commands;

use App\Models\City;
use App\Models\Municipality;
use App\Models\Settlement;
use App\Models\SettlementType;
use App\Models\State;
use App\Models\Zipcode;
use App\Models\Zone;
use Illuminate\Console\Command;
use App\Http\Controllers\Api\CoreController;
use Illuminate\Support\Facades\Schema;

class StoreZipcodesData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:store-zipcodes-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Take zipcode data from an external file and store it in zipcode database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $services = new CoreController();

        $services->truncateTables();
        $data = $services->readZipcodesFile();

        //An asterisk symbol was added at the end of each row, in order to be able to explode the text file.
        $AllZipcodesData = explode("*", $data);

        //Every row in this file has each field separated by a pipe symbol, so it is used to explode every individual
        // row (each row contains the data of one zipecode)
        $zipcodesArray = [];
        foreach($AllZipcodesData as $key => $individualZipcodeRow) {
            $zipcodesArray[] = explode("|", $individualZipcodeRow);
        }

        //File's first row contains the headers
        $KeysArray = $zipcodesArray[0];

        //Generate an individual key => value array for each row, in order to make more clear the DB inserts
        for($i = 1; $i < count($zipcodesArray); $i++) {
            if(count($KeysArray) != count($zipcodesArray[$i])) {
                unset($zipcodesArray[$i]);
            } else {
                $finalZipcodesArray[] = array_combine($KeysArray, $zipcodesArray[$i]);
            }
        }

        //Call insert functions for all tables
        $services->insertZones($finalZipcodesArray);
        $services->insertSettlementTypes($finalZipcodesArray);
        $services->insertSettlements($finalZipcodesArray);
        $services->insertCities($finalZipcodesArray);
        $services->insertMunicipalies($finalZipcodesArray);
        $services->insertStates($finalZipcodesArray);
        $services->insertZipcodes($finalZipcodesArray);


        return Command::SUCCESS;
    }


}
