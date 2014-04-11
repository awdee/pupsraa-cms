<?php

class ContactUsController extends BaseController 
{

	public function showContactUs()
	{
		return View::make('pages.contact-us');
	}
}
