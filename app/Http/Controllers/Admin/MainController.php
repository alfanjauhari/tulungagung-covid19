<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
	/**
	 * Define Middleware
	 */
    public function __construct()
    {
    	$this->middleware('auth');
    }
}
