<?php

class ProductsController extends \BaseController {

	public function create(){
		return View::make('products.insert');
	}
	public function store()
	{
		if (Sentry::check())
			$ued = Sentry::getUser()->id;
			{
						$product = new Product();

			$product->user_id = $ued;
			$product->part_number = Input::get('part_number');
			$product->supplier = Input::get('supplier');
			$product->grade = Input::get('grade');
			$product->shape = Input::get('shape');
			$product->radius = Input::get('radius');
			$product->length = Input::get('length');
			$product->breadth = Input::get('breadth');
			$product->thickness = Input::get('thickness');
			$product->weight = Input::get('weight');
			if($image = Input::file('images')){
					$filename = date('Y-m-d-H:i:s')."-".rand(1,100);
					Image::make($image->getRealPath())
								->resize(150,150)
								->save('public/images/'. $filename);

					$product->images = 'images/'. $filename;
				}else{
					$product->images = 'images/default.jpg';
				}

		    
						$product->save();

						return Redirect::to('/list')->with('flash_notice','Product added successfully');
					
			}


	}
	public function display(){
		$products = Product::all();
		$users = User::all();
		return View::make('products.list')
		->with('products',$products)
		->with('users',$users);
	}


	


}