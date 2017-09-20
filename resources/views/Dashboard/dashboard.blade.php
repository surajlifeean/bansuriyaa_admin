@extends('main')


@section('stylesheets')


<style>
	.wrimagecard{	
	margin-top: 0;
    margin-bottom: 1.5rem;
    text-align: left;
    position: relative;
    background: #fff;
    box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
    border-radius: 4px;
    transition: all 0.3s ease;
}
.wrimagecard .fa{
	position: relative;
    font-size: 70px;
}
.wrimagecard-topimage_header{
padding: 20px;
}
a.wrimagecard:hover, .wrimagecard-topimage:hover {
    box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
}
.wrimagecard-topimage a {
    width: 100%;
    height: 100%;
    display: block;
}
.wrimagecard-topimage_title {
    padding: 20px 24px;
    height: 80px;
    padding-bottom: 0.75rem;
    position: relative;
}
.wrimagecard-topimage a {
    border-bottom: none;
    text-decoration: none;
    color: #525c65;
    transition: color 0.3s ease;
}



</style>

@endsection


@section('content')

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<div class="container-fluid">
	<div class="row">
	<div class="col-md-3 col-sm-4">
	<div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:rgba(119, 178, 88, 0.9) ">
            <center><a href="/data-matching-and-cleansing-features/data-merging-and-purging"><img alt="" src="http://res.cloudinary.com/match2lists/image/upload/c_scale,w_200/v1497199248/Data-Provider-Solutions_420_azudag.png"></a></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Total Users
            <div class="pull-right badge">18</div></h4>
          </div>
        </a>
      </div>
      </div>
    <div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color: rgba(119, 178, 88, 0.1)">
            <center><i class = "fa fa-cubes" style="color:#16A085"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Orders Placed
            <div class="pull-right badge" id="WrControls"></div></h4>
          </div>
        </a>
      </div>
</div>
<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba(213, 15, 37, 0.1)">
            <center><i class="fa fa-pencil-square-o" style="color:#d50f25"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title" >
            <h4>Orders Delivered
            <div class="pull-right badge" id="WrForms"></div>
            </h4>
          </div>
          
        </a>
      </div>
	</div>
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba(51, 105, 232, 0.1)">
             <center><i class="fa fa-table" style="color:#3369e8"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Net Sales Revenue
            <div class="pull-right badge" id="WrGridSystem"></div></h4>
          </div>
          
        </a>
      </div>
	</div>
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
             <center><i class="fa fa-info-circle" style="color:#fabc09"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Returns & Replacements
            <div class="pull-right badge" id="WrInformation"></div></h4>
          </div>
         
        </a>
      </div>
	</div>
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
            <div class="wrimagecard-topimage_header" style="background-color: rgba(121, 90, 71, 0.1)">
           <center><i class="fa fa-bars" style="color:#795a47"> </i></center> 
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Total Items
            <div class="pull-right badge" id="WrNavigation"></div></h4>
          </div>
          
        </a>
      </div>
	</div>
	</div>
</div>



@endsection