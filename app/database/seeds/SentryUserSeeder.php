<?php

class SentryUserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		Sentry::getUserProvider()->create(array(
	        'email'    => 'user@user.com',
	        'password' => 'sentryuser',
	        'name' => 'UserFirstName',
	        'activated' => 1,
	    ));

		Sentry::getUserProvider()->create(array(
	        'email'    => 'admin@admin.com',
	        'password' => 'sentryadmin',
	        'name' => 'AdminFirstName',
	        'activated' => 1,
	    ));

	    
	}

}