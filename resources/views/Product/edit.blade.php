@extends('main')


@section('title','|Homepage')



@section('content')


      <div class="col-md-10 content">
          <div class="panel panel-default">
  <div class="panel-heading">
    Edit Product
  </div>
  <div class="panel-body">

    {!!Form::model($product,['route'=>['product.update',$product->id],'method'=>'PUT'])!!}


		{{Form::label('name','Title:')}}
		{{Form::text('name',null,array('class'=>'form-control'))}}


		{{Form::label('description','Description:')}}
		{{Form::text('description',null,array('class'=>'form-control'))}}
	<br>
	<div class="row">
		
		<div class="col-md-6">
				{{Form::label('category_id','Select Category:')}}
		{{Form::select('category_id',$categories,$product->category_id,['class'=>'form-control category'])}}
		</div>
		

		<div class="col-md-6">

				{{Form::label('subcategory_id','Select Subcategory:')}}
				 <select class="form-control subcategory" name="subcategory_id" selected="{{$product->subcategory_id}}">
				 <option value="{{$product->subcategory_id}}">{{$product->subcategory->name}}</option>
  
    </select>


		</div>
	</div>
	
		{{Form::label('status','Select Status:')}}
		
		@if($product->status==1)
			Active
		@else 
			Inactive
		@endif

		{{Form::select('status', ['0' => 'inactive', '1' => 'active'], null, ['placeholder' => 'Pick a Category...'],array('class'=>'form-control btn btn-primary'))}}


	
		{{Form::submit('Save Changes',array('class'=>'form-control btn btn-primary'))}}
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