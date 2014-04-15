<?php

class ContactUsController extends BaseController 
{

	public function showContactUs()
	{
		return View::make('pages.contact-us');
	}

	public function showList()
	{
		return View::make('pages.list');
	}
}
