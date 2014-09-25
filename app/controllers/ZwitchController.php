<?php

class ZwitchController extends \BaseController {

	public function payment(){

		$orderID = str_random(20);

		$apikey = 'J2JVc1kbY8t467SCte73S';

		$amount = 300;

		$data = $orderID.'|'.$amount.'|'.$apikey;

		$key = '7IGOT6Q0N';

		$checksum = hash_hmac('md5', $data, $key);


		return View::make('zwitch.show')
			->with('apikey', $apikey)
			->with('orderID', $orderID)
			->with('amount', $amount)
			->with('checksum', $checksum);
	}

	public function response(){

		$status = Input::get('status');
		$payment_token = Input::get('payment_token');
		$customerReferenceNo  = Input::get('customerReferenceNo');
		$orderID  = Input::get('orderID');
		$amount = Input::get('amount');
		$paymentMode  = Input::get('paymentMode');
		$cardProvider = Input::get('cardProvider');
		$email = Input::get('email');
		$mobileNo = Input::get('mobileNo');
		$checksum = Input::get('checksum');
        $group_status = 0;


		if($status == 0)
		{

			$user_id = Sentry::getUser()->id;

			$user = Sentry::findUserById($user_id);

			$sub_group = Sentry::findGroupByName('Subscribers');
			$user_group = Sentry::findGroupByName('Users');

			if ($user->removeGroup($user_group) && $user->addGroup($sub_group))
		    {
		        $group_status = 1;
		    }

		}



		return View::make('zwitch.response')
			->with('status', $status)
			->with('payment_token', $payment_token)
			->with('customerReferenceNo', $customerReferenceNo)
			->with('orderID', $orderID)
			->with('amount', $amount)
			->with('paymentMode', $paymentMode)
			->with('cardProvider', $cardProvider)
			->with('email', $email)
			->with('mobileNo', $mobileNo)
			->with('checksum', $checksum)
			->with('group_status', $group_status);

	}


}