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
    	<div class="col-sm-2"><a href="#" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
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
            <li class="active"><a href="#changeimage" data-toggle="tab">Change Image</a></li>
            <li><a href="#settings" data-toggle="tab">Edit Profile</a></li>
            <li><a href="#messages" data-toggle="tab">Your Post</a></li>
            <li><a href="#messages" data-toggle="tab">Edit Post</a></li>
          </ul>
              
          <div class="tab-content">
            <div class="tab-pane active " id="changeimage">
              {{ Form::open(['route' => 'image.store','files'=>'true','class' =>'form-horizontal']) }}
                      <fieldset>

                        @if (Session::has('flash_message'))
                <div class="form-group ">
                  <p>{{ Session::get('flash_message') }}</p>
                </div>
              @endif
              <!-- image -->
              <div class="row">
                <div class="form-group col-md-6 input-llg">
                  {{Form::file('images',['class' => 'form-control btn  input-llg'])}}
                  {{ errors_for('images', $errors) }}
                </div>
              </div>
              <div class="row">
              <div class="form-group  col-md-6 ">
                {{ Form::submit('Update Image', ['class' => 'btn btn-md btn-primary btn-block file-Upload']) }}
              </div>
              </div>
              
            </fieldset>
                {{ Form::close() }}
              
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               

               <h2></h2>
               
               
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
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      

@stop