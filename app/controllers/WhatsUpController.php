<?php

class WhatsUpController extends BaseController 
{

	public function showWhatsUp()
	{
		return View::make('pages.whats-up');
	}

	public function showProjects()
	{
		return View::make('pages.projects');
	}

	public function showEvents()
	{
		return View::make('pages.events');
	}
}
