<?php

namespace IndianCityFinder\Tests\src\Services;

use IndianCityFinder\src\Services\IndianCityProvider;

class IndianCityProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function findByStationCodeTest() 
    {
        $actualResult = IndianCityProvider::findByStationCode("INDB");
        
        $this->assertEquals("INDORE", $actualResult);
    }

}
