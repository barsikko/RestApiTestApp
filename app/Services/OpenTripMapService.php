<?php 

namespace App\Services;

class OpenTripMapService
{

	public $params;

	public function getRequestParams($request) : OpenTripMapService
	{
      $radius = $request->get('radius');
      $lon = $request->get('lon');
      $lat = $request->get('lat');
      $src_geom = $request->get('src_geom');
      $src_attr = $request->get('src_attr');
      $kinds = $request->get('kinds');
      $name = $request->get('name');
      $rate = $request->get('rate');
      $format = $request->get('format');
      $limit = $request->get('limit');

      $params = compact('radius', 'lon', 'lat', 'src_geom', 'src_attr',
                         'kinds', 'name', 'rate', 'format', 'limit');

      $this->params = array_merge($params, ['apikey' => env('API_KEY')]);

      return $this;

	}


}