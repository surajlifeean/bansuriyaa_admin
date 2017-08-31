@extends('main')


@section('title','|Create Category')



@section('content')


  <div class="col-md-10 content">
          <div class="panel panel-default">
  <div class="panel-heading">
    Add Category
  </div>
  <div class="panel-body">

    {!!Form::open(array('route'=>'category.store'))!!}

		{{Form::label('title','Category Name:')}}
		{{Form::text('title',null,array('class'=>'form-control'))}}


		{{Form::label('description','Description:')}}
		{{Form::text('description',null,array('class'=>'form-control'))}}
	
	
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
