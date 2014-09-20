@extends('main')

@section('title', 'Productlisting')

@section('content')
<<<<<<< HEAD
<div class="third-row">
    <div class="container">
        <div class="col-md-12">
           {{ Form::open(['route' => 'filter.search','class' =>'form-horizontal ']) }}
            <div class="form-group">
              <div class="col-md-3 ">
                {{ Form::select('Metal', array('metal' => 'Metal - Steel '), ['class' => 'form-control input-md'])}}                  
              </div>
              <div class="col-md-3 ">
                {{ Form::text('thickness', null, ['placeholder' => 'Thickness', 'class' => 'form-control input-md'])}}
              </div>
              <div class="col-md-2 ">
                {{ Form::text('grade_a', null, ['placeholder' => 'Grade', 'class' => 'form-control input-md'])}}
              </div>
              <div class="col-md-2 ">
                {{ Form::text('grade_b', null, ['placeholder' => 'Grade', 'class' => 'form-control input-md'])}}
              </div>
              <div class="col-md-2 ">
                <button type="submit" class="btn btn-success btn-lg ">SEARCH &nbsp;&nbsp;<i class="fa fa-search ser-icon"></i></button>
              </div>
            </div>
          {{ Form::close() }}
        </div>
    </div>
</div><!-- thrid row close -->
    <div class="col-md-2 filter">
        <div class="filter-block text-center">
            <div class="filter-head">
                <b>FILTER SCRAP BY</b>
            </div>
            <div class="filter-body">
                {{ Form::open(['route' => 'filter.search', 'class' => 'form-inline']) }}
                    {{ Form::text('company', Input::old('company'), ['placeholder' => 'Company', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('part_number', null, ['placeholder' => 'Part Number', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('supplier', null, ['placeholder' => 'Supplier', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('grade_a', null, ['placeholder' => 'Grade', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('grade_b', null, ['placeholder' => 'Grade', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('thickness', null, ['placeholder' => 'Thickness', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('weight', null, ['placeholder' => 'Weight', 'class' => 'form-control input-sm'])}}
                    {{ Form::submit('Filters', ['class' => 'btn btn-md btn-info ']) }}
                {{ Form::close() }}
=======

{{ Form::open(['route' => 'filter.search', 'class' => 'form-inline']) }}
    {{ Form::text('company', Input::old('company'), ['placeholder' => 'Company', 'class' => 'form-control input-lg'])}}
    {{ Form::text('part_number', null, ['placeholder' => 'Part Number', 'class' => 'form-control input-lg'])}}
    {{ Form::text('supplier', null, ['placeholder' => 'Supplier', 'class' => 'form-control input-lg'])}}
    {{ Form::text('grade', null, ['placeholder' => 'Grade', 'class' => 'form-control input-lg'])}}
    {{ Form::text('shape', null, ['placeholder' => 'Shape', 'class' => 'form-control input-lg'])}}
    {{ Form::text('radius', null, ['placeholder' => 'Radius', 'class' => 'form-control input-lg'])}}
    {{ Form::text('length', null, ['placeholder' => 'Length', 'class' => 'form-control input-lg'])}}
    {{ Form::text('breadth', null, ['placeholder' => 'Breadth', 'class' => 'form-control input-lg'])}}
    {{ Form::text('thickness', null, ['placeholder' => 'Thickness', 'class' => 'form-control input-lg'])}}
    {{ Form::text('weight', null, ['placeholder' => 'Weight', 'class' => 'form-control input-lg'])}}

    {{ Form::submit('Search Scrap', ['class' => 'btn btn-lg btn-success btn-block']) }}
{{ Form::close() }}

@foreach ($products as $product)

<div class="row listbox">
  <div class="container">
  <div class="col-md-12 ">
    <b style="color:#29C36A;">Item Number: </b> <b>{{$product->p_id}}</b>
  </div>

    <div class="col-md-3 imz" >
        {{HTML::image($product->images)}}
    </div>
    <div class="col-md-3 company"><b style="color:#888">Company:</b><b> {{ $product->user->company_name}}</b></div>
    <div class="col-md-3 company"><b style="color:#888">Part Number:</b><b>{{ $product->part_number}}</b></div>
    <div class="col-md-3 company"><b style="color:#888">Supplier:</b><b>{{ $product->supplier}}</b></div>
    <div class="col-md-3 company"><b style="color:#888">Grade:</b><b>{{ $product->grade}}</b></div>
    <div class="col-md-3 company"><b style="color:#888">Shape:</b><b>{{ $product->shape}}</b></div>
    <div class="col-md-3 company"><b style="color:#888">Radius:</b><b>{{ $product->radius}}</b></div>
    <div class="col-md-3 company"><b style="color:#888">Length:</b><b>{{ $product->length}}</b></div>
    <div class="col-md-3 company"><b style="color:#888">Breadth:</b><b>{{ $product->breadth}}</b></div>

    <div class="col-md-3 company"><b style="color:#888">Thickness:</b><b>{{ $product->thickness}}</b></div>
    <div class="col-md-3 company"><b style="color:#888">Weight:</b><b>{{ $product->weight}}</b></div>
    <div class="col-md-3 company"><b style="color:#888">Posted On:</b><b>{{ $product->created_at}}</b></div>
    <div class="col-md-3 col-md-offset-9 company">
    <button type="submit" class="btn btn-success">YES I AM INTERESTED</button></div>
>>>>>>> 143bceabd9f5ae8e4df30b4f6613c6bded5f0b50

            </div>
                            
          
        </div>
        
    </div>
@foreach ($products as $product)
    <div class="col-md-10 pull-right">
        <div class="row box-list">
            <div class="col-md-3 box-image">
                {{HTML::image($product->images,'Thumb', array('class' => 'mainthumb'))}}
            </div>   
            <div class="col-md-3">
                <div class=" box-textb"></div>
                <div class=" box-text">Metal: <c class="box-val text-capitalize">{{ $product->metal}}</c></div>
                <div class=" box-text">Supplier: <c class="box-val text-capitalize">{{ $product->supplier}}</c></div>
                <div class=" box-text">City: <c class="box-val text-capitalize">{{ $product->user->city}}</c></div>
                <div class=" box-text">Grade: <c class="box-val text-capitalize">{{ $product->grade_a}} - {{ $product->grade_b}}</c></div>
                <div class=" box-text">Part Number: <c class="box-val text-capitalize">{{ $product->part_number}}</c></div>
                <div class=" box-text">Thickness: <c class="box-val text-capitalize">{{ $product->thickness}}</c></div>
            </div> 
            <div class="col-md-3">
                <div class=" box-textb"></div>
                <div class=" box-texta">Shape: <c class="box-val text-capitalize">{{ $product->shape}}</c></div>
                @if ( $product->shape === 'circle')
                        <div class=" box-texta">Inner Diameter: <c class="box-val text-capitalize">{{ $product->size_a}}</c></div>
                        <div class=" box-texta">Outer Diameter: <c class="box-val text-capitalize">{{ $product->size_b}}</c></div>
                        @elseif ($product->shape === 'square')
                        <div class=" box-texta">Length: <c class="box-val text-capitalize">{{ $product->size_a}}</c></div>
                        @elseif ($product->shape === 'rectangle')
                        <div class=" box-texta">Length: <c class="box-val text-capitalize">{{ $product->size_a}}</c></div>
                        <div class=" box-texta">Breadth: <c class="box-val text-capitalize">{{ $product->size_b}}</c></div>
                        @elseif ($product->shape === 'triangle')
                        <div class=" box-texta">Side A: <c class="box-val text-capitalize">{{ $product->size_a}}</c></div>
                        <div class=" box-texta">Side B: <c class="box-val text-capitalize">{{ $product->size_b}}</c></div>
                        <div class=" box-texta">Side C: <c class="box-val text-capitalize">{{ $product->size_c}}</c></div>
                        @elseif ($product->shape === 'trapezoid')
                        <div class=" box-texta">Side A: <c class="box-val text-capitalize">{{ $product->size_a}}</c></div>
                        <div class=" box-texta">Side B: <c class="box-val text-capitalize">{{ $product->size_b}}</c></div>
                        <div class=" box-texta">Height:: <c class="box-val text-capitalize">{{ $product->size_c}}</c></div>
                        @elseif ($product->shape === 'others')
                        <div class=" box-texta">Length: <c class="box-val text-capitalize">{{ $product->size_a}}</c></div>
                        <div class=" box-texta">Breadth: <c class="box-val text-capitalize">{{ $product->size_b}}</c></div>
                        <div class=" box-texta">Height: <c class="box-val text-capitalize">{{ $product->size_c}}</c></div>
                        @endif
                <div class=" box-texta">Weight: <c class="box-val text-capitalize">{{ $product->weight}}</c></div>
                <div class=" box-texta">Volume: <c class="box-val text-capitalize">{{ $product->volume}} - {{ $product->bynumber}} - {{ $product->perday}}</c></div>
            </div>
            <div class="col-md-3 last-box">
                @if ($variable = str_limit($product->created_at,10) ) 
                    @endif
                <div class=" box-textc">Posted On:<c class="box-val text-capitalize">{{$variable}}</c></div>
                @if ($string = str_random(10) ) 
                    @endif
                <a href="{{$product->images}}" data-lightbox="random{{$string}}">{{HTML::image($product->images,'Thumb', array('class' => 'thumb'))}}</a>
                <a href="{{$product->images}}" data-lightbox="random{{$string}}">{{HTML::image($product->images,'Thumb', array('class' => 'thumb'))}}</a>
                <a href="{{$product->images}}" data-lightbox="random{{$string}}">{{HTML::image($product->images,'Thumb', array('class' => 'thumb'))}}</a>
                    
                 <strong class="box-thumb">Click to enlarge image </strong>
                        
                         {{ HTML::linkAction('MailController@interested','I AM INTERESTED',array(),array('class'=>'btn btn-success box-button')) }} 
                      
            </div>           
        </div>
    </div>
@endforeach  
<div class="row">
    <div class="col-md-10 pull-right text-center">
        {{$products->appends(Request::except('page'))->links()}}<br>

<<<<<<< HEAD
    </div>
</div> 
=======
  </div>
</div>

@endforeach
>>>>>>> 143bceabd9f5ae8e4df30b4f6613c6bded5f0b50

@stop