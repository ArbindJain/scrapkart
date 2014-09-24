<?php

use basicAuth\Repo\UserRepositoryInterface;
use basicAuth\formValidation\RegistrationForm;

class RegistrationController extends \BaseController {

	/**
	 * @var $user
	 */
	protected $user;

	/**
	 * @var RegistrationForm
	 */
	private $registrationForm;

	function __construct(UserRepositoryInterface $user, RegistrationForm $registrationForm)
	{
		$this->user = $user;
		$this->registrationForm = $registrationForm;
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

    /**      * Store a newly created resource in storage.      *      *
@return Response      */     public function store()     
{         
	$input =Input::only('name','email', 'password', 'password_confirmation', 'mobile',
 'company_name', 'designation','country', 'city', 'address', 'pin_code', 'phone','business_type','others', 'turnover','pan','terms','images');

		$this->registrationForm->validate($input);

		$input = Input::only('name','email', 'password', 'mobile',
 'company_name', 'designation','country', 'city', 'address', 'pin_code', 'phone','business_type','others', 'turnover','pan','terms');
		
		
		$input = array_add($input, 'activated', true);

		$user = $this->user->create($input);

		// Find the group using the group name
    	$usersGroup = Sentry::findGroupByName('Users');

    	// Assign the group to the user
    	$user->addGroup($usersGroup);
    	$data =array(
 			'myNumber' => '09279088882'
 		);
    	Mail::send('emails.registertemplate',$data, function ($message){
    	$message->subject('Welcome To Scrapkart');
    	$message->to('arbind.ilus@gmail.com'); // Recipient 

});
		return Redirect::to('login')->withFlashMessage('User Successfully Created!');
	}



}