@extends('main')

@section('title', 'Productlisting')

@section('content')
<div class="third-row">
    <div class="container">
        <div class="col-md-12 col-md-offset-1">
           {{ Form::open(['route' => 'filter.search','class' =>'form-horizontal ']) }}
            <div class="form-group">
              <div class="col-md-3 ">
                {{ Form::select('metal', ['' => 'All Metals'] + $metals, ['class' => 'form-control input-md'])}}
              </div>
              <div class="col-md-3 ">
                {{ Form::text('thickness', null, ['placeholder' => 'Thickness', 'class' => 'form-control input-md'])}}
              </div>
              <div class="col-md-3 ">
                {{ Form::text('city', null, ['placeholder' => 'City', 'class' => 'form-control input-md'])}}
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
             <div class="form-group suppl">   {{ Form::select('supplier', ['' => 'All Suppliers'] + $suppliers, ['class' => 'form-control input-sm'])}}<br>
                    {{ Form::text('city', null, ['placeholder' => 'City', 'class' => 'form-control input-sm margin-top-4'])}}</div>
                    {{ Form::text('grade_a', null, ['placeholder' => 'Grade', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('shape', null, ['placeholder' => 'Shape', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('thickness', null, ['placeholder' => 'Thickness', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('volume_from', null, ['placeholder' => 'Volume From', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('volume_to', null, ['placeholder' => 'Volume To', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('date_from', null, ['placeholder' => 'Date From', 'class' => 'form-control input-sm'])}}
                    {{ Form::text('date_to', null, ['placeholder' => 'Date To', 'class' => 'form-control input-sm'])}}
                    {{ Form::submit('Filter', ['class' => 'btn btn-md btn-info ']) }}
                {{ Form::close() }}

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
                <div class=" box-text">Product ID: <c class="box-val text-capitalize">{{ $product->p_id}}</c></div>
                <div class=" box-text">Metal: <c class="box-val text-capitalize">{{ $product->metal}}</c></div>
                <div class=" box-text">Supplier: <c class="box-val text-capitalize">{{ $product->supplier}}</c></div>
                <div class=" box-text">City: <c class="box-val text-capitalize">{{ $product->user->city}}</c></div>
                <div class=" box-text">Grade: <c class="box-val text-capitalize">{{ $product->grade_a}} - {{ $product->grade_b}}</c></div>
                <div class=" box-text">Thickness: <c class="box-val text-capitalize">{{ $product->thickness}}</c> mm</div>
            </div>
            <div class="col-md-3">
                <div class=" box-textb"></div>
                <div class=" box-texta">Shape: <c class="box-val text-capitalize">{{ $product->shape}}</c></div>
                @if ( $product->shape === 'circle')
                        <div class=" box-texta">Inner Diameter: <c class="box-val text-capitalize">{{ $product->size_a}} </c>mm</div>
                        <div class=" box-texta">Outer Diameter: <c class="box-val text-capitalize">{{ $product->size_b}} </c>mm</div>
                        @elseif ($product->shape === 'square')
                        <div class=" box-texta">Length: <c class="box-val text-capitalize">{{ $product->size_a}} </c>mm</div>
                        @elseif ($product->shape === 'rectangle')
                        <div class=" box-texta">Length: <c class="box-val text-capitalize">{{ $product->size_a}} </c>mm</div>
                        <div class=" box-texta">Breadth: <c class="box-val text-capitalize">{{ $product->size_b}} </c>mm</div>
                        @elseif ($product->shape === 'triangle')
                        <div class=" box-texta">Side A: <c class="box-val text-capitalize">{{ $product->size_a}} </c>mm</div>
                        <div class=" box-texta">Side B: <c class="box-val text-capitalize">{{ $product->size_b}} </c>mm</div>
                        <div class=" box-texta">Side C: <c class="box-val text-capitalize">{{ $product->size_c}} </c>mm</div>
                        @elseif ($product->shape === 'trapezoid')
                        <div class=" box-texta">Side A: <c class="box-val text-capitalize">{{ $product->size_a}} </c>mm</div>
                        <div class=" box-texta">Side B: <c class="box-val text-capitalize">{{ $product->size_b}} </c>mm</div>
                        <div class=" box-texta">Height:: <c class="box-val text-capitalize">{{ $product->size_c}} </c>mm</div>
                        @elseif ($product->shape === 'others')
                        <div class=" box-texta">Length: <c class="box-val text-capitalize">{{ $product->size_a}} </c>mm</div>
                        <div class=" box-texta">Breadth: <c class="box-val text-capitalize">{{ $product->size_b}} </c>mm</div>
                        <div class=" box-texta">Height: <c class="box-val text-capitalize">{{ $product->size_c}} </c>mm</div>
                        @endif
                        <div class=" box-texta">Volume: <c class="box-val text-capitalize">{{ $product->volume}} / {{ $product->bynumber}}  {{ $product->perday}}</c></div>
                        
            </div>
            <div class="col-md-3 last-box">
                @if ($variable = str_limit($product->created_at,10) )
                    @endif
                <div class=" box-textc">Posted On:<c class="box-val text-capitalize">{{$variable}}</c></div>
                @if ($string = str_random(10) )
                    @endif
              <!--  <a href="{{$product->images}}" data-lightbox="random{{$string}}">{{HTML::image($product->images,'Thumb', array('class' => 'thumb'))}}</a>
                <a href="{{$product->images}}" data-lightbox="random{{$string}}">{{HTML::image($product->images,'Thumb', array('class' => 'thumb'))}}</a>
                <a href="{{$product->images}}" data-lightbox="random{{$string}}">{{HTML::image($product->images,'Thumb', array('class' => 'thumb'))}}</a>
-->                 @if($product->files === '0')
                    <strong class="box-thumb"><a href="{{$product->files}}">No CAD File Available <br><i class="fa fa-download fa-2x down-but"></i></a></strong>
                    @else
                    <strong class="box-thumb"><a href="{{$product->files}}">Download CAD File <br><i class="fa fa-download fa-2x down-but"></i></a></strong>
                    @endif
                  {{ HTML::linkAction('MailController@interested','I AM INTERESTED',array(),array('class'=>'btn btn-success box-button')) }}

                        
            </div>
        </div>
    </div>
@endforeach
<div class="row">
    <div class="col-md-10 pull-right text-center">
        {{$products->appends(Request::except('page'))->links()}}<br>

    </div>
</div>
@stop