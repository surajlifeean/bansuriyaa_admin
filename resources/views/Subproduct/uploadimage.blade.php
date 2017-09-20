
@extends('main')


@section('stylesheets')

<style>
	.check
{
    opacity:0.5;
	color:#996;
	
}

</style>

@endsection

@section('content')

		
<div class="container">
	<div class="row">

  {!!Form::open(array('route'=>'productimage.store','files' => true))!!}


<input type="hidden" name="subproduct_id" value="{{$imagename[0]->p_id}}">

		<div class="form-group">	
@php 
	$imageno=0;

	@endphp

		@foreach($imagename as $image)

		<div class="col-md-3" style="margin-top: 20px;"> <label class="btn btn-primary"><img src="{{asset('images/'.$image->name)}}" class="img-thumbnail img-check"> <input type="file" name="chk[{{$image->id}}]" id="item[]" value="{{$imageno++}}" autocomplete="off"></label>
		</div>

		@endforeach

		@while($imageno<4)

		<div class="col-md-3" style="margin-top: 20px;"> <label class="btn btn-primary"><img src="{{asset('images/upload.png')}}" class="img-thumbnail img-check"> <input type="file" name="chk[]" id="item[]" value="{{$imageno++}}" autocomplete="off"></label>
		</div>

		@endwhile



		</div>

		<input type="Submit" value="Submit" class="btn btn-primary" style="margin-top: 20px;">
		
	  {!!Form::close()!!}


	</div>	
</div>




@endsection



@section('scripts')

<script>
	$('.form-group').click(function(e){
    			
			alert (image.input[1].value);

    		});
	});


</script>


@endsection