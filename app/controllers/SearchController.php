<?php

class SearchController extends \BaseController {

        public function create(){
        $filter = DataFilter::source(Search::with('author','categories'));
        $filter->add('title','Title', 'text');
        $filter->add('categories.name','Categories','tags');
        $filter->add('publication_date','publication date','daterange')->format('m/d/Y', 'en');
        $filter->submit('search');
        $filter->reset('reset');
        $filter->build();

        $grid = DataGrid::source($filter);
        $grid->attributes(array("class"=>"table table-striped"));
        $grid->add('id','ID', true)->style("width:70px");
        $grid->add('title','Title', true);
        $grid->add('author.fullname','Author');
        $grid->add('{{ implode(", ", $categories->lists("name")) }}','Categories');
        $grid->add('publication_date|strtotime|date[m/d/Y]','Date', true);
        $grid->add('body|strip_tags|substr[0,20]','Body');
        $grid->edit('/rapyd-demo/edit', 'Edit','modify|delete');

        return  View::make('rapyd::demo.filtergrid', compact('filter', 'grid'));
        }
        public function search(){
               $query_supplier = '%'.Input::get('supplier').'%';
               $query_metal = '%'.Input::get('metal').'%';
               $query_city = '%'.Input::get('city').'%';
               $query_grade_a = '%'.Input::get('grade_a').'%';
               $query_grade_b = '%'.Input::get('grade_b').'%';
               $query_shape = '%'.Input::get('shape').'%';
               $query_part_number = '%'.Input::get('part_number').'%';

               if(Input::has('thickness_from'))
                 $query_thickness_from = Input::get('thickness_from');
               else
                $query_thickness_from = 0;

               if(Input::has('thickness_to'))
                 $query_thickness_to = Input::get('thickness_to');
               else
                $query_thickness_to = Product::max('thickness');

              if(Input::has('weight_from'))
                 $query_weight_from = Input::get('weight_from');
               else
                $query_weight_from = 0;

               if(Input::has('weight_to'))
                 $query_weight_to = Input::get('weight_to');
               else
                $query_weight_to = Product::max('weight');

              if(Input::has('volume_from'))
                 $query_volume_from = Input::get('volume_from');
               else
                $query_volume_from = 0;

               if(Input::has('volume_to'))
                 $query_volume_to = Input::get('volume_to');
               else
                $query_volume_to = Product::max('volume');

              if(Input::has('date_from'))
                 $query_date_from = date( 'Y-m-d H:i:s', strtotime(Input::get('date_from')));
               else
                $query_date_from = date( 'Y-m-d H:i:s', strtotime("1-1-1970"));

               if(Input::has('date_to'))
                 $query_date_to = date( 'Y-m-d H:i:s', strtotime(Input::get('date_to') . " 23:59"));
               else
                $query_date_to = date( 'Y-m-d H:i:s', strtotime("now"));

               $products = Product::where('supplier', 'LIKE', $query_supplier)
                                        ->where('metal', 'LIKE', $query_metal)
                                        ->where('city', 'LIKE', $query_city)
                                        ->where('grade_a', 'LIKE', $query_grade_a)
                                        ->where('grade_b', 'LIKE', $query_grade_b)
                                        ->whereBetween('thickness', array($query_thickness_from, $query_thickness_to))
                                        ->where('shape', 'LIKE', $query_shape)
                                        ->whereBetween('weight', array($query_weight_from, $query_weight_to))
                                        ->whereBetween('created_at', array($query_date_from, $query_date_to))
                                        ->whereBetween('volume', array($query_volume_from, $query_volume_to))
                                        ->where('part_number', 'LIKE', $query_part_number)
                                        ->paginate(5);



                return View::make('products.list')
                        ->with('products',$products)
                        ->withInput(Input::flash());
        }


}