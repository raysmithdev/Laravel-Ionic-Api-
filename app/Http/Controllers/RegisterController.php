<?php

namespace App\Http\Controllers;


use Request;
use App\Http\Controllers\Controller;

use App\User;

class RegisterController extends Controller
{
	/**
     * Check if username exists
     *
     * @return Response
     */
	public function checkIfUsernameExists()
	{
		$username = Request::get('username');
		
		$exists = User::where('username', $username)->count();
		
		if ($exists > 0)
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

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public static function create()
    {
	    $data = Request::all();
	    
        $user = new User;
		$user->username = $data['username'];
		$user->password = bcrypt($data['password']);

		$resp = $user->save();
		
		if ($resp) 
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
