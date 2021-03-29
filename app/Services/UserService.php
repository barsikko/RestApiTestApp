<?php 

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserService
{

private $user;

public function authUser($email, $password) : UserService
{

	$user = User::where('email', $email)->first();

	if (!$user || !Hash::check($password, $user->password))
    {
    	throw ValidationException::withMessages([
			'verification' => ['Wrong login or password']
		]);
    }

    $this->user = $user;

    return $this;
}

public function createToken($device) : string
{

	$token = $this->user->createToken($device)->plainTextToken;

	return $token; 

}

public function getUser() : User
{
	return $this->user;
}



}