<?php namespace basicAuth\formValidation;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

	protected $rules = [
			'name'=>'required',
			'email'=>'required|email|unique:users',
			'mobile'=>'required|integer|digits:10',
			'company_name'=>'required',
			'country'=>'required',
			'city'=>'required',
			'address'=>'required',
			'pin_code'=>'required|digits:6|integer',
			'phone'=>'required|numeric|digits:10',
			'pan'=>'required|alpha_num:10',
			'terms'=>'accepted',
			'password'=>'required|alpha_num|between:6,12|confirmed',
			'password_confirmation'=>'required',
	];
}


