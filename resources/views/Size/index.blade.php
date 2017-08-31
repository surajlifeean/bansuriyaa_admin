@extends('main')


@section('title','|All Size')

@section('content')


<div class="col-md-10 content">
  <div class="panel panel-default">
 	 <div class="panel-heading">
    	All Sizes
  	</div>
  	<div class="panel-body">
  			<table class="table table-striped">
 					
  			<thead>
  			<tr>
  			<th>Size</th>

			<th>Description</th>  	
			
  			<th>Action</th>
  			</tr>
  			</thead>
 					<tbody>

 						@foreach($sizes as $size)
			
							<tr><td>
							{{$size->name}}
							</td>

							<td>
							{{$size->description}}

							</td>


							<td>

							<button type="button" class="btn btn-default" aria-label="Left Align">
								 <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
							</button>


                 {!! Html::LinkRoute('size.edit','',array($size->id),array('class'=>"btn btn-primary glyphicon glyphicon-pencil"))!!}
							
							<button type="button" class="btn btn-default" aria-label="Left Align">
								 <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</button>
							</td>
							
							</tr>

						@endforeach
					</tbody>

			</table>

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
	$(".inactive").click(function(){

		confirm("Do you want to make it Active?");

	});
</script>
@endsection