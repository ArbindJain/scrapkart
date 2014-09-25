<?php

use basicAuth\Repo\UserRepositoryInterface;
use basicAuth\formValidation\RegistrationForm;

class MailController extends \BaseController {

	
   public function interested()     
		{         
			
 			if(Sentry::check()){
 				$data =array('myNumber' => '09279088882');
 					Mail::send('emails.registertemplate',$data, function ($message){
			    	$message->subject('Welcome To Scrapkart');
			    	$message->to(Sentry::getUser()->email); // Recipient 
			    	}); 
			   		return View::make('emailsuccess');
 			}
			   }



}