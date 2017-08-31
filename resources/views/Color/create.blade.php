@extends('main')


@section('title','|Create Color')


@section('stylesheets')
	
	{!!Html::style('css/jquery.minicolors.css')!!}

	
  <link rel="shortcut icon" href="http://www.templatemonster.com/favicon.ico">
  <link rel="icon" href="http://www.templatemonster.com/favicon.ico">

@endsection


@section('content')


    <div class="panel-heading">
    Add Color
  </div>
    
      <div class="row">
      {!!Form::open(array('route'=>'color.store'))!!}

     	  <div class="col-md-6">

			        {{Form::label('name','Color Name:')}}
					{{Form::text('name',null,array('class'=>'form-control'))}}

					{{Form::label('color_code','Color:')}}<br>
					  <input type="text" id="inlinecolors" class="form-control" data-inline="true" value="#4fc8db" name="color_code">
			 </div>
			  
			  
			  <div id="inlinecolorhex" class="col-md-6">
			    <h3>Current selection: <small>#4fc8db</small></h3>
					{{Form::submit('Submit',array('class'=>'form-control btn btn-primary'))}}
				  {!!Form::close()!!}

			  </div>
			  			      
      </div><!-- @end .row -->
  
 




@endsection


@section('scripts')

{!!Html::script('js/jquery.minicolors.min.js')!!}
	
<script type="text/javascript">
$(function(){
  
  var $inlinehex = $('#inlinecolorhex h3 small');
  $('#inlinecolors').minicolors({
    inline: true,
    theme: 'bootstrap',
    change: function(hex) {
      if(!hex) return;
      $inlinehex.html(hex);
    }
  });
});
</script>


@endsection