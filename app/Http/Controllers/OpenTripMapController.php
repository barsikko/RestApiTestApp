<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use App\Services\OpenTripMapService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class OpenTripMapController extends Controller
{

   public function index(SendRequest $request)
   {
          
      $lang = $request->get('lang');

      $service = (new OpenTripMapService)->getRequestParams($request);

      $response = Http::get("http://api.opentripmap.com/0.1/{$lang}/places/radius", $service->params);

      return $response->json('features');

   }
}
