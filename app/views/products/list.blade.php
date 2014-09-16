@extends('master')

@section('title', 'Productlisting')

@section('content')

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


  </div>
</div>

@endforeach

@stop