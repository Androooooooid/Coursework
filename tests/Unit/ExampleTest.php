<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\TestController;

class ExampleTest extends TestCase
{
    /**
     *@dataProvider providerrequest 	
     */
    
    public function testBasicTest($a, $b, $c)
    {
    	$test=new TestController();
        $this->assertEquals($c, $test->request($a, $b));
    }

    public function providerrequest()
    {
    	return array(
    		array('','','error'),
    		array('abc','','error'),
    		array('','c','error'),
    		array('abc','c','The new string ab'),
    		array('ccc','c','The string is empty'),
    	);
    }
}

