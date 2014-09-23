<?php

class ProductsController extends \BaseController {

	public function create(){
		return View::make('products.insert');
	}
	public function store()
	{
		if (Sentry::check())
			$ued = Sentry::getUser()->id;
			$city = Sentry::getuser()->city;
			{
						$product = new Product();

			$product->user_id = $ued;
			$product->metal = Input::get('metal');
			$product->supplier = Input::get('supplier');
			$product->grade_a = Input::get('grade_a');
			$product->grade_b = Input::get('grade_b');
			$product->shape = Input::get('shape');
			$product->size_a = Input::get('size_a');
			$product->size_b = Input::get('size_b');
			$product->size_c = Input::get('size_c');
			$product->thickness = Input::get('thickness');
			$product->volume = Input::get('volume');
			$product->bynumber = Input::get('bynumber');
			$product->perday = Input::get('perday');
			$product->city = $city;

			if($image = Input::file('images')){
					$filename = date('Y-m-d-H:i:s')."-".rand(1,100);
					Image::make($image->getRealPath())
								->resize(488,370)
								->save('public/images/'. $filename);

					$product->images = 'images/'. $filename;
				}else{
					$product->images = 'images/default.jpg';
				}
				$cadfilename = date('Y-m-d-H:i:s')."-".rand(1,100);
				if(Input::hasfile('files')){
					Input::file('files')->save('public/img/', $cadfilename);
					$product->files = 'img/'. $cadfilename;
				}
				else {
					$product->files = '0';
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
		$suppliers = Product::lists('supplier', 'supplier');
    $metals = Product::lists('metal', 'metal');

		return View::make('products.list')
		->with('products',$products)
		->with('suppliers',$suppliers)
		->with('metals',$metals)
		->with('users',$users);
	}

	public function update(){
			$p_id = Input::get('p_id');
			$metal = Input::get('Metal');
			$supplier = Input::get('supplier');
			$grade_a = Input::get('grade_a');
			$grade_b = Input::get('grade_b');
			$shape = Input::get('shape');
			$size_a = Input::get('size_a');
			$size_b = Input::get('size_b');
			$size_c = Input::get('size_c');
			$thickness = Input::get('thickness');
			$volume = Input::get('volume');
			$bynumber = Input::get('bynumber');
			$perday = Input::get('perday');
			$defaultmetal = Product::where('p_id',$p_id)->first();
			if($metal == "" or "null"){
				$metal = $defaultmetal->metal;
				}
				elseif($grade_a == "" or "null"){
					$grade_a =$defaultmetal->grade_a;
				}
			
		DB::table('products')
            ->where('p_id', $p_id)
            ->update(array(
            	'metal' => $metal,
            	'supplier' => $supplier,
            	'grade_a' => $grade_a,
            	'grade_b' => $grade_b,
            	'shape' => $shape,
            	'size_a' => $size_a,
            	'size_b' => $size_b,
            	'size_c' => $size_c,
            	'thickness' => $thickness,
            	'volume' => $volume,
            	'bynumber' => $bynumber,
            	'perday' => $perday,

            	));
	}







}