<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;

use App\User;

class UsersController extends Controller
{
    /**
     * Get all users
     *
     * @return Response
     */
    public function getAllUsers()
    {
        $users = User::all();
        
		return Response::json($users);
        
    }

}
