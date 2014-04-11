<?php

class WhatsUpController extends BaseController 
{

	public function showWhatsUp()
	{
		return View::make('pages.whats-up');
	}
}
