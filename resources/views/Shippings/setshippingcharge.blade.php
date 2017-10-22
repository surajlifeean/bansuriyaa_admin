
@extends('main')


@section('title','|Shipping Charge')



@section('content')

<div class="col-md-10 content">
  <div class="panel panel-default">
  <div class="panel-heading">
    Add Shipping Charge
  </div>
  <div class="panel-body">

@if(count($shipping))
	 {!!Form::model($shipping,['route'=>['shipping.update',$shipping->id],'method'=>'PUT'])!!}
@else
    {!!Form::open(array('route'=>'shipping.store'))!!}
@endif
<div class="row">
	<div class="col-md-6">
		{{Form::label('cart_value','Up to Cart Value:')}}
		{{Form::text('cart_value',null,array('class'=>'form-control'))}}
	</div>
	<div class="col-md-6">

		{{Form::label('shipping_cost','Shipping Cost:')}}
		{{Form::text('shipping_cost',null,array('class'=>'form-control'))}}
	</div>
</div><br><br>
		{{Form::submit('Save',array('class'=>'form-control btn btn-primary'))}}
  {!!Form::close()!!}


  </div>
</div>
</div>

@endsection