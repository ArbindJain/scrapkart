@extends('main')

@section('title', 'Edit Profile')

@section('content')

	@if (Session::has('flash_message'))
		<div class="form-group">
			<p style="padding: 5px" class="bg-success">{{ Session::get('flash_message') }}</p>
		</div>
	@endif

<div class="container">
    <div class="row">
  		<div class="col-sm-10"><h1>{{$user->name}} Dashboard </h1></div>
    	<div class="col-sm-2">
      
          
        
      </a>
      </div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              
          <ul class="list-group">
            <li class="list-group-item text-muted">Profile</li>
            <li class="list-group-item text-right text-capitalize"><span class="pull-left text-capitalize "><strong>Joined</strong></span> {{$user->created_at}}</li>
            <li class="list-group-item text-right text-capitalize"><span class="pull-left text-capitalize"><strong>Last seen</strong></span> {{$user->last_login}}</li>
            <li class="list-group-item text-right text-capitalize"><span class="pull-left text-capitalize"><strong>Address</strong></span> {{$user->address}}</li>
            <li class="list-group-item text-right text-capitalize"><span class="pull-left text-capitalize"><strong>City</strong></span> {{$user->city}}</li>
            <li class="list-group-item text-right text-capitalize"><span class="pull-left text-capitalize"><strong>Country</strong></span> {{$user->country}}</li>
            
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Company profile <i class="fa fa-link fa-1x"></i></div>
            <li class="list-group-item text-right text-capitalize"><span class="pull-left text-capitalize"><strong>Company Name</strong></span> {{$user->company_name}}</li>
            <li class="list-group-item text-right text-capitalize"><span class="pull-left text-capitalize"><strong>Pan</strong></span> {{$user->pan}}</li>
            <li class="list-group-item text-right text-capitalize"><span class="pull-left text-capitalize"><strong>Business Type</strong></span> {{$user->business_type}}</li>
            
            <div class="panel-body"></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-twitter fa-2x"></i> 
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#changeimage" data-toggle="tab">Your Post</a></li>
            <li><a href="#settings" data-toggle="tab">Edit Profile</a></li>
            <li><a href="#message" data-toggle="tab">Change Image</a></li>
          </ul>
              
          <div class="tab-content">
            <div class="tab-pane active " id="changeimage">
             @foreach ($products as $product)
    <div class="col-md-12 pull-right">
        <div class="row box-list">
            <div class="col-md-3 box-image">
                {{HTML::image($product->images,'Thumb', array('class' => 'mainthumbs'))}}
            </div>
            <div class="col-md-3">
                <div class=" box-textb"></div>
                <div class=" box-text">Product ID: <c class="box-val text-capitalize">{{ $product->p_id}}</c></div>
                <div class=" box-text">Metal: <c class="box-val text-capitalize">{{ $product->metal}}</c></div>
                <div class=" box-text">Supplier: <c class="box-val text-capitalize">{{ $product->supplier}}</c></div>
                <div class=" box-text">Grade: <c class="box-val text-capitalize">{{ $product->grade_a}} - {{ $product->grade_b}}</c></div>
                <div class=" box-text">Thickness: <c class="box-val text-capitalize">{{ $product->thickness}} mm</c></div>
            </div>
            <div class="col-md-3">
                <div class=" box-textb"></div>
                <div class=" box-texta">Shape: <c class="box-val text-capitalize">{{ $product->shape}}</c></div>
                @if ( $product->shape === 'circle')
                        <div class=" box-texta">Inner Diameter: <c class="box-val text-capitalize">{{ $product->size_a}} mm</c></div>
                        <div class=" box-texta">Outer Diameter: <c class="box-val text-capitalize">{{ $product->size_b}} mm</c></div>
                        @elseif ($product->shape === 'square')
                        <div class=" box-texta">Length: <c class="box-val text-capitalize">{{ $product->size_a}} mm</c></div>
                        @elseif ($product->shape === 'rectangle')
                        <div class=" box-texta">Length: <c class="box-val text-capitalize">{{ $product->size_a}} mm</c></div>
                        <div class=" box-texta">Breadth: <c class="box-val text-capitalize">{{ $product->size_b}} mm</c></div>
                        @elseif ($product->shape === 'triangle')
                        <div class=" box-texta">Side A: <c class="box-val text-capitalize">{{ $product->size_a}} mm</c></div>
                        <div class=" box-texta">Side B: <c class="box-val text-capitalize">{{ $product->size_b}} mm</c></div>
                        <div class=" box-texta">Side C: <c class="box-val text-capitalize">{{ $product->size_c}} mm</c></div>
                        @elseif ($product->shape === 'trapezoid')
                        <div class=" box-texta">Side A: <c class="box-val text-capitalize">{{ $product->size_a}} mm</c></div>
                        <div class=" box-texta">Side B: <c class="box-val text-capitalize">{{ $product->size_b}} mm</c></div>
                        <div class=" box-texta">Height:: <c class="box-val text-capitalize">{{ $product->size_c}} mm</c></div>
                        @elseif ($product->shape === 'others')
                        <div class=" box-texta">Length: <c class="box-val text-capitalize">{{ $product->size_a}} mm</c></div>
                        <div class=" box-texta">Breadth: <c class="box-val text-capitalize">{{ $product->size_b}} mm</c></div>
                        <div class=" box-texta">Height: <c class="box-val text-capitalize">{{ $product->size_c}} mm</c></div>
                        @endif
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
                   
                    <!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_{{$product->p_id}}">
  Edit Listing
</button>

<!-- Modal -->
<div class="modal fade" id="myModal_{{$product->p_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(['route' => 'products.update','files'=>'true','class' =>'form-horizontal ']) }}
                      <fieldset>

                        @if (Session::has('flash_message'))
                <div class="form-group ">
                  <p>{{ Session::get('flash_message') }}</p>
                </div>
              @endif
              <!-- Part number field -->
              <!--<div class="form-group">
                {{ Form::text('user_id', null, ['placeholder' => 'Part Number', 'class' => 'form-control', 'required' => 'required'])}}
                {{ errors_for('user_id', $errors) }}
              </div>-->
              <div class="row">
                <div class="form-group col-md-12 pull-left">
                <span class="help-block">Product ID</span>
                {{ Form::select('p_id', array($product->p_id => $product->p_id), ['class' => 'form-control'])}}
                {{ errors_for('supplier', $errors) }}

              </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12 pull-left">
                {{ Form::select('metal', array('' => 'Select Metal','steel' => 'Steel','aluminum' => 'Aluminum','copper' => 'Copper','iron' => 'Iron','cobalt' => 'Cobalt','nickel' => 'Nickel'), $product->metal, ['class' => 'form-control'])}}
                {{ errors_for('metal', $errors) }}
                </div>
              </div>
              

              
              <!-- supplier name field -->
              <div class="row">
                <div class="form-group col-md-12 pull-left">
                {{ Form::text('supplier', $product->supplier, ['class' => 'form-control input-lg'])}}
                {{ errors_for('supplier', $errors) }}
              </div>
              </div>
              
              
              <!-- Grade field -->
              <div class="row">
              <div class="form-group col-md-6  ">
                {{ Form::text('grade_a', null, ['placeholder' => $product->grade_a, 'class' => 'form-control input-lg input-llg'])}}
                {{ errors_for('grade_a', $errors) }}
                <span class="help-block"> Ex: CRNO </span>
                
              </div>

                
              <!-- Grade field -->
              <div class=" col-md-6 margin-15" >
                {{ Form::text('grade_b', null, ['placeholder' => $product->grade_b, 'class' => 'form-control input-lg input-llg'])}}
                {{ errors_for('grade_b', $errors) }}
                <span class="help-block">Ex: 530 </span>
              </div>
              </div>
              <!-- shape -->
              <div class="row">
                <div class="form-group col-md-12 " id="shape">
                <select class="input-llg" name="shape">
                  <option value=""> {{$product->shape}} </option>
                  <option value="circle">Circle</option>
                  <option value="square">Square</option>
                  <option value="rectangle">Rectangle</option>
                  <option value="triangle">Triangle</option>
                  <option value="trapezoid">Trapezoid</option>
                  <option value="others">Others</option>
                </select>
                {{ errors_for('shape', $errors) }}
              </div>
              </div>
              

              <!--  Radius -->
              <div class="row"> 
                <div class= "sizeA box">
                  <div class="form-group col-md-4 ">
                    {{ Form::text('size_a', null, [ 'class' => 'place_a form-control input-lg'])}}
                    {{ errors_for('size_a', $errors) }}
                    <span class="help-block">In Millimeter(mm)</span>
                  </div>
                </div>
                <div class="sizeB box ">
                <!-- breadth -->
                  <div class=" col-md-4 margin-15">
                    {{ Form::text('size_b', null, ['class' => ' place_b form-control input-lg'])}}
                    {{ errors_for('size_b', $errors) }}
                    <span class="help-block">In Millimeter(mm)</span>
                  </div>
                </div>
                <div class="sizeC box ">
                <!-- breadth -->
                  <div class=" col-md-4 ">
                    {{ Form::text('size_c', null, ['class' => ' place_c form-control input-lg'])}}
                    {{ errors_for('size_c', $errors) }}
                    <span class="help-block">In Millimeter(mm)</span>
                  </div>
                </div>
              </div>
              

              
              
              
              
              
              <!-- Thickness -->
              <div class="row">
                <div class="form-group col-md-12" >
                {{ Form::text('thickness', null, ['placeholder' => 'Thickness', 'class' => 'form-control input-lg input-llg' ])}}
                {{ errors_for('thickness', $errors) }}
                <span class="help-block">In Millimeter(mm) </span>

                
              </div>
              </div>
              
              
              <!-- Volume -->
              <div class="row">
                <div class="form-group col-md-4">
                {{ Form::text('volume', null, ['placeholder' => $product->volume, 'class' => 'form-control input-lg', 'required' => 'required'])}}
                {{ errors_for('volume', $errors) }}
                <span class="help-block">Ex: XX Number Per Day OR XX Tons Per Day </span>
              </div>
              <div class=" col-md-4 margin-15">
                {{ Form::select('bynumber', array(''=>$product->number ,'number' => 'Number','weight' => 'Weight'), ['class' => 'form-control'])}}
                {{ errors_for('bynumber', $errors) }}
              </div>
              <div class=" col-md-4 ">
                {{ Form::select('perday', array(''=>$product->number,'per day' => 'Per Day' , 'per month' => 'Per Month'), ['class' => 'form-control'])}}
                {{ errors_for('perday', $errors) }}
              </div>

              </div>
              
              <!-- image -->
              <div class="row">
                <div class="form-group col-md-12 input-llg">
                  {{Form::file('images',['class' => 'form-control btn  input-llg'])}}
                  {{ errors_for('images', $errors) }}
                </div>
              </div>
              
              <div class="row">
              <div class="form-group  col-md-12 ">
                ( <b style="color:#ff8888;"> | </b> ) Required Fields.
              </div>
              </div>

              <!-- Submit field -->
              <div class="row">
              <div class="form-group  col-md-12 ">
                {{ Form::submit('Update product', ['class' => 'btn btn-md btn-primary btn-block file-Upload']) }}
              </div>
              </div>
              
            </fieldset>
                {{ Form::close() }}
      </div>
     
    </div>
  </div>
</div><!-- modal -->

                        
            </div>
        </div>
    </div>
@endforeach

              <div class="text-center">
                {{$products->appends(Request::except('page'))->links()}}
              </div>
              
             </div><!--/tab-pane-->
            
             <div class="tab-pane" id="settings">
            		
               	
                  <hr>
                  {{ Form::model($user, ['method' => 'PATCH', 'route' => ['profiles.update', $user->id]]) }}



		<!-- first_name Field -->
		<div class="form-group">
			{{ Form::label('name', ' Name:') }}
			{{ Form::text('name', null, ['class' => 'form-control input-sm']) }}
			{{ errors_for('name', $errors) }}
		</div>
		<!-- Password field -->
		<div class="form-group">
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password', ['class' => 'form-control input-sm']) }}
			<p class="help-block">Leave password blank to NOT edit the password.</p>
			{{ errors_for('password', $errors) }}
		</div>

		<!-- Password Confirmation field -->
		<div class="form-group">
			{{ Form::label('password_confirmation', 'Repeat Password:') }}
			{{ Form::password('password_confirmation', ['class' => 'form-control input-sm'] )}}
		</div>

		<!-- designation-->
		<div class="form-group">
			{{ Form::label('designation', 'Designation:') }}
			{{ Form::text('designation', null, ['class' => 'form-control input-sm']) }}
			{{ errors_for('designation', $errors) }}

		</div>
		<!-- mobile-->
		<div class="form-group">
			{{ Form::label('mobile', 'Mobile:') }}
			{{ Form::text('mobile', null, ['class' => 'form-control input-sm']) }}
			{{ errors_for('mobile', $errors) }}

		</div>


		<!-- Update Profile Field -->
		<div class="form-group">
			{{ Form::submit('Update Profile', ['class' => 'btn btn-primary']) }}
		</div>
	{{ Form::close() }}
               
              </div><!--/tab-pane-->
              <div class="tab-pane" id="message">
               

               {{Form::open(array('url'=> 'uploads','files'=>'true'))}}
               {{Form::file('images')}}
               {{Form::submit('upload')}}
               {{Form::close()}}
               
               
             </div><!--/tab-pane-->
               
          </div><!--/tab-content-->
          

        </div><!--/col-9-->
    </div><!--/row-->
                                                      

@stop