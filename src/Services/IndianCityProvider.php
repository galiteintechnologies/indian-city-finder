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
     * @param type $stationCode
     * 
     * @return string $cityName
     */
    public static function findByStationCode($stationCode) {
        
        $cityList = array();
        include(__DIR__ . '/../../Resources/indianCityList.php');
        
        if(key_exists($stationCode, $cityList))
        {
            return $cityList[$stationCode];
        } else {
            
            return "City not found. Please check your station code.";
        }
    }
    
}