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
		{{Form::select('category_id', ['1' => 'trending', '2' => 'ethnic','3'=>'collections'], null, ['placeholder' => 'Pick a Category...'],array('class'=>'form-control btn btn-primary'))}}
		</div>
		

		<div class="col-md-6">

				{{Form::label('subcategory_id','Select Subcategory:')}}
		{{Form::select('subcategory_id', ['4' => 'kurti', '5' => 'Salwar','6'=>'lehnga'], null, ['placeholder' => 'Pick a Subcategory...'],['class'=>'form-group'])}}
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
