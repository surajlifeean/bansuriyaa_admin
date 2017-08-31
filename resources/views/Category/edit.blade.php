@extends('main')


@section('title','|Homepage')



@section('content')


      <div class="col-md-10 content">
          <div class="panel panel-default">
  <div class="panel-heading">
    Edit Product
  </div>
  <div class="panel-body">

    {!!Form::model($category,['route'=>['category.update',$category->id],'method'=>'PUT'])!!}


		{{Form::label('title','Title:')}}
		{{Form::text('title',null,array('class'=>'form-control'))}}


		{{Form::label('description','Description:')}}
		{{Form::text('description',null,array('class'=>'form-control'))}}
	
		{{Form::label('status','Select Status:')}}
		
		@if($category->status==1)
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
