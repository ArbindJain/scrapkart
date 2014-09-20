<?php namespace basicAuth\formValidation;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

	protected $rules = [
			'name'=>'required|alpha',
			'email'=>'required|email|unique:users',
			'mobile'=>'required|integer|digits:10',
			'company_name'=>'required|alphanum',
			'country'=>'required',
			'city'=>'required',
			'address'=>'required',
			'pin_code'=>'required|digits:6|integer',
			'phone'=>'required|numeric|digits:10',
			'business_type'=>'required',
			'pan'=>'required|alpha_num|digits:10',
			'terms'=>'accepted',
			'password'=>'required|alpha_num|between:6,12|confirmed',
			'password_confirmation'=>'required',
			'turnover'=>'integer'
	];
}


