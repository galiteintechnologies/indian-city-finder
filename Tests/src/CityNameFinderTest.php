<?php

namespace IndianCityFinder\Tests;

use IndianCityFinder\CityNameFinder;

class CityNameFinderTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function findTest()
    {
        $cityNameFinder = new CityNameFinder();
        
        $actualResult = $cityNameFinder->find('FDB');
        
        $this->assertEquals("FARIDABAD", $actualResult);
    }
}
