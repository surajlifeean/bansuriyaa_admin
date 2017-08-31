<!DOCTYPE html>
<html lang="en">

@include('_head')


@yield('stylesheets')

<body>

@include('_nav')



<div class="container">

@include('_messages')

@yield('content')

</div>


@include('_javascript')


@yield('scripts')


</body>

</html>
