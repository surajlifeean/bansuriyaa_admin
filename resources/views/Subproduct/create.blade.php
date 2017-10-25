@extends('main')


@section('title','|add Subproduct')



@section('content')


      <div class="col-md-10 content">
          <div class="panel panel-default">
  <div class="panel-heading">
    Add Subproduct
  </div>
  <div class="panel-body">

  {!!Form::open(array('route'=>'subproduct.store','files' => true))!!}



    {{Form::label('product_id','Select Product:')}}

    {{Form::select('product_id',$products,null,['class'=>'form-control'])}}


    {{Form::label('color_id','Select Color:')}}

    {{Form::select('color_id',$colors,null,['class'=>'form-control'])}}


    {{Form::label('size_id','Select Size:')}}

    {{Form::select('size_id',$sizes,null,['class'=>'form-control'])}}



		{{Form::label('p_code','Product Code:')}}
		{{Form::text('p_code',null,array('class'=>'form-control'))}}



      
 	<div class="row">
		<div class="col-md-3">
		{{Form::label('qty','Qty:')}}
		{{Form::text('qty',null,array('class'=>'form-control'))}}
		</div>

		<div class="col-md-3">
		{{Form::label('price','Marked Price:')}}
		{{Form::text('price',null,array('class'=>'form-control mp'))}}
		</div>
    

    <div class="col-md-3">
    {{Form::label('sale_price','Selling Price:')}}
    {{Form::text('sale_price',null,array('class'=>'form-control sp'))}}
    </div>
    		
		<div class="col-md-3">
		{{Form::label('discount','Discount Percent:')}}
		{{Form::text('discount',null,array('class'=>'form-control dis'))}}
		</div>

	</div>
	<br>
	   {{Form::label('new_arrival','Latest Arrival:')}}
    {{Form::checkbox('new_arrival', 1, null, ['class' => 'field']) }}
    
<br>
		{{Form::label('image','Main Image')}}
		
	
	<br>

<div class="input_fields_wrap">
    <button class="add_field_button glyphicon glyphicon-plus btn btn-primary" aria-hidden="true">Add More Images</button><br>
    <div>
    		 <input type="file" name="image[]"> 
    </div>
</div>

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

<script>



    $(document).ready(function() {

        setInterval(function(){ 

          var mp=$('.mp').val();
          var sp=$('.sp').val();
          if(mp && sp){
            var dis=mp-sp;

            var per=dis*100/mp;
          $('.dis').val(per);

          }

        }, 6000);
    });


  </script>
  @endsection