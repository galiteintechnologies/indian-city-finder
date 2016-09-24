<?php

/*
 * This file is part of the Indian City finder
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace IndianCityFinder\src\Services;

class IndianCityProvider {
    
    /**
     * List of indian city with station code
     *
     * @var array
     */
    protected $cityList = array();
    
    /**
     * @param type $stationCode
     * 
     * @return string $cityName
     */
    public static function findByStationCode($stationCode) {
        
        $serviceFile = __DIR__ . '/../../Resources/indianCityList.php';
        
        $cityList = $this->loadCityListFromFile($serviceFile);
        
        if(key_exists($stationCode, $cityList))
        {
            return $cityList[$stationCode];
        } else {
            
            return "City not found. Please check your station code.";
        }
    }
    
    /**
     * Load 'city list' from service file.
     *
     * @param $serviceFile
     *
     * @return array
     */
    private function loadCityListFromFile($serviceFile)
    {
        /** @noinspection PhpIncludeInspection */
        return include($serviceFile);
    }
    
}