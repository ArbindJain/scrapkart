<?php

class PagesController extends \BaseController {

	public function getIndex()
	{
		return View::make('index');
	}
	public function getHome()
	{
		return View::make('pages.home');
	}

	public function getAbout()
	{
		return View::make('pages.about');
	}

	public function getContact()
	{
		return View::make('pages.contact');
	}
	public function getmetal()
	{
		return View::make('pages.metal');
	}



}