<?php namespace JBFJ\Facades;

use Illuminate\Support\Facades\Facade;

class Footy extends Facade {
	
	protected static function getFacadeAccessor()
	{		
		return 'footy';		
	}
	
}