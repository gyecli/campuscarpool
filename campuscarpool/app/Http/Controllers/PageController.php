<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

	public function getLoginPage() {
		return view('pages.index');
	}

    public function aboutus() {
    	$name = 'Tim Ye';

    	return view('pages.test')->with('name', $name);

    	// Option 2
    	// return view('pages/aboutus') -> with([
	    // 			'first' => 'Tim',
	    // 			'last' => 'Ye'
    	// 			]);

    	// Option 3
    	// data[];
    	// data['fist'] = 'Tim';
    	// data['last'] = 'Ye';
    	// return view('pages/aboutus', $data);
    }


}
