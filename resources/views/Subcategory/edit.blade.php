@extends('main')


@section('title','|Create Category')



@section('content')


  <div class="col-md-10 content">
          <div class="panel panel-default">
  <div class="panel-heading">
    Add SubCategory
  </div>
  <div class="panel-body">

    {!!Form::model($subcategory,array('route'=>['subcategory.update',$subcategory->id],'method'=>'PUT'))!!}




		{{Form::label('name','Category Name:')}}
		{{Form::text('name',null,array('class'=>'form-control'))}}


		{{Form::label('description','Description:')}}
		{{Form::text('description',null,array('class'=>'form-control'))}}
	
	 
    {{Form::label('category_id','Select Main Category:')}}

    {{Form::select('category_id',$categories,$subcategory->category_id,['class'=>'form-control'])}}

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
