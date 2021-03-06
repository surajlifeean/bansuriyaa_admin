
@extends('main')


@section('title','|Homepage')



@section('content')


<div class="col-md-10 content">
  <div class="panel panel-default">
 	 <div class="panel-heading">
    	All Category
  	</div>
  	<div class="panel-body">
  			<table class="table table-striped">
 					
  			<thead>
  			<tr>
  			<th>Category Name</th>
  		
  			<th>Action</th>
  			</tr>
  			</thead>
 					<tbody>

 						@foreach($category as $item)
			
							<tr><td>
							{{$item->title}}
							</td>

							<td>

							@if($item->status==1)
							<button type="button" class="btn btn-default active" aria-label="Left Align">
								 <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
							</button>
							@else
							<button type="button" class="btn btn-default inactive" aria-label="Left Align">
								 <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
							</button>

							@endif

							<button type="button" class="btn btn-default" aria-label="Left Align">
								 <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
							</button>


                 {!! Html::LinkRoute('category.edit','',array($item->id),array('class'=>"btn btn-primary glyphicon glyphicon-pencil"))!!}
							
							<button type="button" class="btn btn-default delete-button" aria-label="Left Align">
								 <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</button>

                    {!! Form::open(['route'=>['category.destroy',$item->id], 'method'=>'DELETE','class'=>'delete-category'])!!}

					{!!Form::close()!!}
  			      
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
<script type="text/javascript">
	
	$('.delete-button').click(function(){

    var r = confirm("Are You Sure You Wanna Delete The Category?!");
    if (r == true) {
       $(".delete-category").submit();
    } 
		
	});
	
</script>
@endsection