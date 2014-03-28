<?php

class HomeController extends BaseController 
{

	public function showUnderconstruct()
	{
		return View::make('layouts.underconstruct');
	}

	public function showHome()
	{
		return View::make('pages.home');
	}
}
