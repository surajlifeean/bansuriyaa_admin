

@extends('main')


@section('title','|Create Product')



@section('content')


      <div class="col-md-10 content">
          <div class="panel panel-default">
  <div class="panel-heading">
    Add Product
  </div>
  <div class="panel-body">

    {!!Form::open(array('route'=>'product.store'))!!}



		{{Form::label('title','Title:')}}
		{{Form::text('title',null,array('class'=>'form-control'))}}


		{{Form::label('description','Description:')}}
		{{Form::text('description',null,array('class'=>'form-control'))}}
	<br>
	<div class="row">
		
		<div class="col-md-6">
				{{Form::label('category','Select Category:')}}   
				{{Form::select('category',$categories,null,['class'=>'form-control category'])}}

		</div>
		

		<div class="col-md-6">

				{{Form::label('subcategory','Select Subcategory:')}}

				 <select class="form-control subcategory" name="subcategory">
  
    </select>

		</div>
	</div>

	
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

				$('.category').on('change',function(e){

					var cat_id=e.target.value;

					console.log(cat_id);
		$(".subcategory").empty();
			$.ajax({
               type:'GET',
               url:'/ajaxreq/create',
               data:{cat_id:cat_id},
               success:function(data){
                console.log(data);
                $.each(data,function(index,data){
                   $('.subcategory').append('<option value="'+data.id+'">'+data.name+'</option>');
                 });
                 
               }
            });



});

		</script>

@endsection