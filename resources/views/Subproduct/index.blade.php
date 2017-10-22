<!-- {{dump($subproduct)}}
 -->@extends('main')


@section('title','|Homepage')

			


@section('content')


<div class="col-md-10 content">
  <div class="panel panel-default">
 	 <div class="panel-heading">
    	All Subproducts
  	</div>
  	<div class="panel-body">
  			<table class="table table-striped">
 					
  			<thead>
  			<tr>
  			<th>Product Name</th>
  			<th>product code</th>
  			<th>Marked Price</th>
  			<th>Selling Price</th>
  			<th>quantity</th>
  			<th>Discount</th>
  			<th>Attribute</th>
  			<th>Image</th>
  			<th>Actions</th>

  			
  			
  			</tr>
  			</thead>
 					<tbody>

 						@foreach($subproduct as $item)
			
							<tr>
							<td>
							{{$item->product->name}}
							</td>
							<td>		
							{{$item->pcode}}
							</td>
							<td>
							{{$item->price}}
							</td>
							<td>
							{{$item->sale_price}}
							</td>
							<td>
								{{$item->quantity}}
							</td>
							<td>
								{{$item->price-$item->sale_price}}
							</td>
							<td>
							{{$item->getsize->name}}
							{{$item->getcolor->color}}
							
							<div style="width:10px;height:10px;border:5px solid {{$item->getcolor->color_code}};">
							</div>

							</td>
							<td>
							@php
							$img=$item->images[0]->name
							@endphp
							<img src="{{asset('images/'.$img)}}" height="160px" weight="120px">
								
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

                 {!! Html::LinkRoute('productimage.edit','',array($item->id),array('class'=>"btn btn-primary glyphicon glyphicon-picture"))!!}
						

                 {!! Html::LinkRoute('subproduct.edit','',array($item->id),array('class'=>"btn btn-primary glyphicon glyphicon-pencil"))!!}
							
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