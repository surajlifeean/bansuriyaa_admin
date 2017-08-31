@extends('main')


@section('title','|Create Category')



@section('content')


  <div class="col-md-10 content">
          <div class="panel panel-default">
  <div class="panel-heading">
    Add SubCategory
  </div>
  <div class="panel-body">

    {!!Form::open(array('route'=>'subcategory.store'))!!}

		{{Form::label('title','Subcategory Name:')}}
		{{Form::text('title',null,array('class'=>'form-control'))}}


		{{Form::label('description','Description:')}}
		{{Form::text('description',null,array('class'=>'form-control'))}}
	
	 
    {{Form::label('category_id','Select Main Category:')}}

    <select class="form-control" name="category_id">
@foreach($category as $cat)
    <option value="{{$cat->id}}">{{$cat->title}}</option>
@endforeach

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
