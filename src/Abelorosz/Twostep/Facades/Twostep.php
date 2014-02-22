<?php

namespace Abelorosz\Twostep\Facades;

use Illuminate\Support\Facades\Facade;

class Twostep extends Facade {

	protected static function getFacadeAccessor()
	{
		return "twostep";
	}

}
