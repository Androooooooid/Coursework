<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TESTcontroller
{	
	/**
	*@Takes two arguments, checks for the presence of one example argument in the input_test argument, replaces when it is found.
 	* @param string $input_test $example
	* @author Koval and Kutyumov
	* @copyright 2018 310lab
 	* @return string changed
 	*/
	public function request($input_test, $example)
	{
		if (empty($example)) {
			return 'error';
		}
		//return view('frontend.Test');
		if (empty($input_test)) {
			return 'error';
		}

		$result = str_replace($example, '', $input_test);

		if (empty(trim($result))) {
			return 'The string is empty';
		}
		
		return 'The new string ' . $result;
	}

}