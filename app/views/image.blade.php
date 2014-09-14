{{Form::open(array('url'=> 'uploads','files'=>'true'))}}
{{Form::file('images')}}
{{Form::submit('upload')}}
{{Form::close()}}