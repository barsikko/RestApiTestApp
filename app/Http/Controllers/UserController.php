<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function login(LoginRequest $request) : Response
    {
        $user = (new UserService())->authUser($request->email, $request->password);

        $token = $user->createToken('device-name');
		
    		$response = [
    		  	'user' => $user->getUser(),
    			'token' => $token
    		];

    		return response($response , 201);
    	
    }


}
