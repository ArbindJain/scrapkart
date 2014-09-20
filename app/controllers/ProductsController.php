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
			$product->metal = 'steel';
			$product->part_number = Input::get('part_number');
			$product->supplier = Input::get('supplier');
			$product->grade_a = Input::get('grade_a');
			$product->grade_b = Input::get('grade_b');
			$product->shape = Input::get('shape');
			$product->size_a = Input::get('size_a');
			$product->size_b = Input::get('size_b');
			$product->size_c = Input::get('size_c');
			$product->thickness = Input::get('thickness');
			$product->weight = Input::get('weight');
			$product->volume = Input::get('volume');
			$product->bynumber = Input::get('bynumber');
			$product->perday = Input::get('perday');

			if($image = Input::file('images')){
					$filename = date('Y-m-d-H:i:s')."-".rand(1,100);
					Image::make($image->getRealPath())
								->resize(488,370)
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
		$products = Product::orderBy('p_id','desc')->paginate(3);
		$users = User::all();
		$users = User::orderBy('id','desc')->paginate(3);
		$suppliers = Product::lists('supplier');
    $metals = Product::lists('metal');

		return View::make('products.list')
		->with('products',$products)
		->with('suppliers',$suppliers)
		->with('metals',$metals)
		->with('users',$users);
	}





}