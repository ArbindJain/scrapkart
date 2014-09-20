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
               $query_shape = '%'.Input::get('shape').'%';
               $query_supplier = '%'.Input::get('supplier').'%';
               $query_company = '%'.Input::get('company').'%';
               $query_part_number = '%'.Input::get('part_number').'%';
               $query_thickness = '%'.Input::get('thickness').'%';
               $query_weight = '%'.Input::get('weight').'%';
               $products = Product::where('shape', 'LIKE', $query_shape)
                                        ->where('supplier', 'LIKE', $query_supplier)
                                        ->where('part_number', 'LIKE', $query_part_number)
                                        ->where('thickness', 'LIKE', $query_thickness)
                                        ->where('weight', 'LIKE', $query_weight)
                                        ->get();

                return View::make('products.list')
                        ->with('products',$products)
                        ->withInput(Input::flash());

        }





}