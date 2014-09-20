<?php

use basicAuth\Repo\UserRepositoryInterface;
use basicAuth\formValidation\RegistrationForm;

class MailController extends \BaseController {

	
   public function interested()     
		{         
			$data =array(
 			'myNumber' => '09279088882'
 										);

			    Mail::send('emails.registertemplate',$data, function ($message){
			    	$message->subject('Welcome To Scrapkart');
			    	$message->to('arbind.ilus@gmail.com'); // Recipient 
			    }); 
			   	return 'email sent';
			   
			   }



}