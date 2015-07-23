<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Auth;

class LoginController extends Controller
{
    /**
     * Try to login a user
     *
     * @return Response
     */
    public function loginUser()
    {
        $data = Request::all();
        

		if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']]))
		{
			return response()->json([
					'success' => true,
			]);
		}
		else
		{
			return response()->json([
					'success' => false,
			]);
		}
    }

}
