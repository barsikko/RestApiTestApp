<?php

namespace Tests\Feature;

use App\Models\ObjectLocation;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\Builder\UserBuilder;
use Tests\TestCase;

class ObjectLocationTest extends TestCase
{


    public function setUp() : void
     {
        parent::setUp();

        $user = Sanctum::actingAs(
                    User::factory()->make(),   
                     ['*']
                 );
    
     }
    /**
     *  get Location test.
     *
     * @return void
     */
    public function test_get_location()
    {

            $obj = ObjectLocation::factory()->make();

              $response = $this
                 ->getJson(
                   "/api/locations?lang={$obj->lang}&radius={$obj->radius}&lon={$obj->lon}&lat={$obj->lat}"
                );


            $response->assertStatus(200);

    }

    public function test_wrong_url_or_not_enough_parametrs_given()
    {

            $obj = ObjectLocation::factory()->make();

              $response = $this
                 ->getJson(
                   "/api/location?lang={$obj->lang}&radius={$obj->radius}&lon={$obj->lon}"
                );


            $response->assertStatus(404);

    }
}
