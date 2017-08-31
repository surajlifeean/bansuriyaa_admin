@extends('main')


@section('title','|Create Size')


@section('stylesheets')
	
	{!!Html::style('css/jquery.minicolors.css')!!}

	
  <link rel="shortcut icon" href="http://www.templatemonster.com/favicon.ico">
  <link rel="icon" href="http://www.templatemonster.com/favicon.ico">

@endsection


@section('content')


    <div class="panel-heading">
    Add Size
  </div>
    
      <div class="row">
      {!!Form::open(array('route'=>'size.store'))!!}

     	  <div class="col-md-6">

			    {{Form::label('name','Size Name:')}}
					{{Form::text('name',null,array('class'=>'form-control'))}}


          {{Form::label('description','Description:')}}
          {{Form::text('description',null,array('class'=>'form-control'))}}


					{{Form::submit('Submit',array('class'=>'form-control btn btn-primary'))}}
				  {!!Form::close()!!}

			  </div>
			  			      
      </div><!-- @end .row -->
  
 




@endsection

