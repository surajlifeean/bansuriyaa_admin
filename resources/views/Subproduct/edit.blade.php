<!-- {{dump($subproduct)}} -->

@extends('main')


@section('title','|add Subproduct')



@section('content')


      <div class="col-md-10 content">
          <div class="panel panel-default">
  <div class="panel-heading">
    Edit Subproduct
  </div>
  <div class="panel-body">

    {!!Form::model($subproduct,['route'=>['subproduct.update',$subproduct->id],'method'=>'PUT'])!!}



    {{Form::label('product_id','Select Product:')}}

    {{Form::select('product_id',$products,$subproduct->product_id,['class'=>'form-control'])}}


    {{Form::label('color_id','Select Color:')}}

    {{Form::select('color_id',$colors,$subproduct->color,['class'=>'form-control'])}}


    {{Form::label('size_id','Select Size:')}}

    {{Form::select('size_id',$sizes,$subproduct->size,['class'=>'form-control'])}}



		{{Form::label('pcode','Product Code:')}}
		{{Form::text('pcode',null,array('class'=>'form-control'))}}

	<div class="row">
		<div class="col-md-3">
		{{Form::label('quantity','Qty:')}}
		{{Form::text('quantity',null,array('class'=>'form-control'))}}
		</div>

		<div class="col-md-3">
		{{Form::label('price','Price:')}}
		{{Form::text('price',null,array('class'=>'form-control'))}}
		</div>
		
		<div class="col-md-3">
		{{Form::label('discount','Discount Value:')}}
		{{Form::text('discount',null,array('class'=>'form-control'))}}
		</div>
		

		<div class="col-md-3">
		
		{{Form::label('distype','Discount Type:')}} <br>


Percentage:<input type="radio" name="distype" value="Percentage" @if($subproduct->discount_type=='Percentage') checked @endif}}>
Flat:<input type="radio" name="distype" value="Flat" @if($subproduct->discount_type=='Flat') checked @endif}}>


		</div>

	</div>
	<!-- <br>
	
		{{Form::label('image','Main Image')}}
		
	
	<br>

<div class="input_fields_wrap">
    <button class="add_field_button glyphicon glyphicon-plus btn btn-primary" aria-hidden="true">Add More Images</button><br>
    <div>
    		 <input type="file" name="image[]"> 
    </div>
</div>
 -->
<br>
<br>
		{{Form::submit('Submit',array('class'=>'form-control btn btn-primary'))}}
  {!!Form::close()!!}


  </div>
</div>
      </div>
      <footer class="pull-left footer">
        <p class="col-md-12">
          <hr class="divider">
          Powered By 2017 <a href="http://www.pingpong-labs.com">, AIDA</a>
        </p>
      </footer>
    </div>

  @endsection

  @section('scripts')

<script>
  

  	$(document).ready(function() {
    var max_fields      = 5; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="file" name="image[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
  @endsection