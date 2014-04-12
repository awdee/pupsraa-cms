<?php

class DonateController extends BaseController 
{

	public function showDonate()
	{
		return View::make('pages.donate');
	}
}
