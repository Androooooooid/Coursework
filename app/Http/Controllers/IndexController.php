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
	
		$menu = array();
		foreach ($pages as $page) {
			$item = array('title' =>$page->name,'alias'=>$page->alias);
			array_push($menu, $item);
		}

		$item = array('title'=>'People','alias'=>'people');
		array_push($menu, $item);

		$item = array('title'=>'Service','alias'=>'service');
		array_push($menu, $item);

		$item = array('title'=>'Contact','alias'=>'contact_form');
		array_push($menu, $item);

		return view('backend.index', array(
											'menu'=>$menu,
											'pages'=>$page,
											'People'=>$people,
											'Service'=>$service,
											'Contact'=>$contact_form,
											));
	}
}
