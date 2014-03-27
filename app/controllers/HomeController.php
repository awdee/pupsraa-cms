<?php

class HomeController extends BaseController {

	public function showUnderconstruct()
	{
		return View::make('layouts.underconstruct');
	}

}