<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function index()
    {
        $users =user::all();
        return view('users',['users' => $users]);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
