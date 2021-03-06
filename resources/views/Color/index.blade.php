@extends('main')


@section('title','|View Color')



@section('content')


<div class="col-md-10 content">
  <div class="panel panel-default">
 	 <div class="panel-heading">
    	All Colors
  	</div>
  	<div class="panel-body">
  			<table class="table table-striped">
 					
  			<thead>
  			<tr>
  			<th>Color Name</th>

			<th>Code</th>  	
			<th>Color</th>	
  			<th>Action</th>
  			</tr>
  			</thead>
 					<tbody>

 						@foreach($colors as $color)
			
							<tr><td>
							{{$color->name}}
							</td>

							<td>
							{{$color->color_code}}

							</td>

							<td class="item_color" style="background-color:{{$color->color_code}}">
								
							</td>

							<td>

							<button type="button" class="btn btn-default" aria-label="Left Align">
								 <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
							</button>


                 {!! Html::LinkRoute('color.edit','',array($color->id),array('class'=>"btn btn-primary glyphicon glyphicon-pencil"))!!}
							
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