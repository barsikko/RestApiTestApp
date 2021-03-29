<?php

namespace Database\Factories;

use App\Models\ObjectLocation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ObjectLocationFactory extends Factory
{
   

   protected $model = ObjectLocation::class;

    public function definition()
    {
        return [
            'lang' => $this->faker->randomElement(['en', 'ru']),
            'radius' => $this->faker->numberBetween(0, 1000),
            'lon' => $this->faker->longitude, 
            'lat' => $this->faker->latitude,
     	    'src_geom' => $this->faker->randomElement(
     	    		['null','osm', 'wikidata', 'snow', 'cultura.ru', 'rosnedra']
     	    	),
        	'src_attr' => $this->faker->randomElement(
     	    		['null', 'osm', 'wikidata', 'snow', 'cultura.ru', 'rosnedra', 'user']
     	    	),
        	'kinds' => null, // Object category. Several comma-separated categories may be stated with OR logic. see List of categories. Objects from interesting_places category are returned by default.
        	'name' => null, //The text string on which to search at the begining of the object name (mimimum 3 characters). All objects are returned by default.
        	'rate' => $this->faker->randomElement([1, 2, 3, '1h', '2h', '3h']),
        	'format' => $this->faker->randomElement(['json', 'geojson', 'count']),
        	'limit' => null, // Maximum number of returned objects. 500 is set by default.
        ];
    }




}