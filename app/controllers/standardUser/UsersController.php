<?php

use basicAuth\Repo\UserRepositoryInterface;
use basicAuth\formValidation\UsersEditForm;

class UsersController extends \BaseController {

	/**
	 * @var $user
	 */
	protected $user;

	/**
	* @var usersEditForm
	*/
	protected $usersEditForm;

	/**
	* @param UsersEditForm $usersEditForm
	*/
	function __construct(UserRepositoryInterface $user, UsersEditForm $usersEditForm)
	{
		$this->user = $user;
		$this->usersEditForm = $usersEditForm;

		$this->beforeFilter('currentUser', ['only' => ['show', 'edit', 'update']]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// $user = User::findOrFail($id);
		$ued = Sentry::getUser()->id;
		
		$user = $this->user->find($id);
		
		//$products =  DB::table('products')->where('user_id',$ued)->get();
		$products = Product::where('user_id',$ued)->paginate(10);
		//$picture = DB::table('pictures')->where('user_id',$ued)->find(1);
		//$pictures = Picture::where('user_id',$ued)->find(1);


		return View::make('protected.standardUser.edit')->withUser($user)
		->with('products',$products);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		// $user = User::findOrFail($id);
		$user = $this->user->find($id);
		if (! Input::has("password"))
		{
			$input = Input::only('name', 'designation' ,'mobile');

			$this->usersEditForm->excludeUserId($user->id)->validate($input);

			$user->fill($input)->save();

			return Redirect::route('profiles.edit', $user->id)->withFlashMessage('User has been updated successfully!');
		}

		else
		{
			$input = Input::only('name', 'password', 'password_confirmation' ,'designation','mobile');

			$this->usersEditForm->excludeUserId($user->id)->validate($input);

			$input = array_except($input, ['password_confirmation']);

			$user->fill($input)->save();

			$user->save();

			return Redirect::route('profiles.edit', $user->id)->withFlashMessage('User (and password) has been updated successfully!');
		}
	}


			
		
	





}