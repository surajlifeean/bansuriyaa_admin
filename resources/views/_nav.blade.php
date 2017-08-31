<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
      MENU
      </button>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        Administrator
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
      <form class="navbar-form navbar-left" method="GET" role="search">
        <div class="form-group">
          <input type="text" name="q" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.pingpong-labs.com" target="_blank">Visit Site</a></li>
        <li class="dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Account
            <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li class="dropdown-header">SETTINGS</li>
              <li class=""><a href="#">Other Link</a></li>
              <li class=""><a href="#">Other Link</a></li>
              <li class=""><a href="#">Other Link</a></li>
              <li class="divider"></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>    <div class="container-fluid main-container">
      <div class="col-md-2 sidebar">
        <div class="row">
  <!-- uncomment code for absolute positioning tweek see top comment in css -->
  <div class="absolute-wrapper"> </div>
  <!-- Menu -->
  <div class="side-menu">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Main Menu -->
      <div class="side-menu-container">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-plane"></span> Active Link</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-cloud"></span> Link</a></li>

          <!-- Dropdown-->
          <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl2">
                      <span class="glyphicon glyphicon-off"></span> Category <span class="caret"></span>
                    </a>
                    <div id="dropdown-lvl2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="nav navbar-nav">
                          <li><a href="{{route('category.create')}}">Add Category</a></li>
                          <li><a href="{{route('category.index')}}">All Category</a></li>
                          <li><a href="#">Link</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
           <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl3">
                      <span class="glyphicon glyphicon-off"></span> Subcategory <span class="caret"></span>
                    </a>
                    <div id="dropdown-lvl3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="nav navbar-nav">
                          <li><a href="{{route('subcategory.create')}}">Add Subcategory</a></li>
                          <li><a href="{{route('subcategory.index')}}">All Subcategory</a></li>
                          <li><a href="#">Link</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
          <li class="panel panel-default" id="dropdown">
            <a data-toggle="collapse" href="#dropdown-lvl1">
              <span class="glyphicon glyphicon-user"></span> Product <span class="caret"></span>
            </a>

            <!-- Dropdown level 1 -->
            <div id="dropdown-lvl1" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav navbar-nav">
                  <li><a href="{{route('product.index')}}">All Products</a></li>
                  <li><a href="{{route('product.create')}}">Add New Product</a></li>
                  <li><a href="#">Link</a></li>

                  <!-- Dropdown level 2 -->
                                 </ul>
              </div>
            </div>
          </li>
          <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl4">
                      <span class="glyphicon glyphicon-off"></span> Subproduct <span class="caret"></span>
                    </a>
                    <div id="dropdown-lvl4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="nav navbar-nav">
                          <li><a href="{{route('subproduct.create')}}">Add Subproduct</a></li>
                          <li><a href="{{route('subcategory.index')}}">All Subproduct</a></li>
                          <li><a href="#">Link</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
               <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl5">
                      <span class="glyphicon glyphicon-off"></span> Color <span class="caret"></span>
                    </a>
                    <div id="dropdown-lvl5" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="nav navbar-nav">
                          <li><a href="{{route('color.create')}}">Add Color</a></li>
                          <li><a href="{{route('color.index')}}">All Color</a></li>
                          <li><a href="#">Link</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
               <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl6">
                      <span class="glyphicon glyphicon-off"></span> Size <span class="caret"></span>
                    </a>
                    <div id="dropdown-lvl6" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="nav navbar-nav">
                          <li><a href="{{route('size.create')}}">Add Size</a></li>
                          <li><a href="{{route('size.index')}}">All Size</a></li>
                          <li><a href="#">Link</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
          

          <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>

        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

  </div>
</div>      </div>