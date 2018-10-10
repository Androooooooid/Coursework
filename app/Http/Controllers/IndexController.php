<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Service;
use App\People;
use App\ContactForm;

class IndexController extends Controller
{
    //
	public function execute(Request $request) {
		
		$pages = Page::all();
		$service = Page::all();
		$people = People::all();
		$contact_form = ContactForm::all();
	
		
		return view('backend.index');
	}
}
