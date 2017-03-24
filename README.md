# Indian City Finder
Find Indian city name by Station Code.

[![Latest Version](https://img.shields.io/packagist/v/nexuslinkservices/indian-city-finder.svg?style=flat-square)](https://packagist.org/packages/nexuslinkservices/indian-city-finder)
[![Software License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nexuslinkservices/indian-city-finder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/indian-city-finder/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/nexuslinkservices/indian-city-finder/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/indian-city-finder/build-status/master)

## Installation

If you use composer, you can add this package by running 

````
composer require galiteintechnologies/indian-city-finder
````

## Usage

```
<?php

use IndianCityFinder\CityNameFinder;

$cityNameFinder = new CityNameFinder();
        
$city = $cityNameFinder->find('NDLS');

echo $city;
```

## Output

```
NEW DELHI
```

## CONTRIBUTING:

Pull requests are always welcome.
