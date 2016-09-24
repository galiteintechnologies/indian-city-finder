<?php

/*
 * This file is part of the Indian City Finder
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace IndianCityFinder;

use IndianCityFinder\src\Services\IndianCityProvider;

class CityNameFinder {    

    /**
     * @param string $stationCode
     * 
     * @return string
     */
    public function find($stationCode) {
        
        if(empty($stationCode)) {
            return "Please provide station code";
        }
        
        return IndianCityProvider::findByStationCode($stationCode);
    }
    
}