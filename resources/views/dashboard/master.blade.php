<!DOCTYPE html>
<html lang="en">
<head>

	<title>Product Operaton</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/toastr.min.css')}}">
	<script type="text/javascript" src="{{asset('js/jqurey.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
	<h1> Header</h1>
	@yield('display')
	@yield('create')
	@yield('edit')
	<h2> Footer</h2>
	
	<script>

 @if(Session::has('message'))

   var type="{{Session::get('alert-type','info')}}"    switch(type){

     case 'info':

            toastr.info("{{ Session::get('message') }}");

            break;

         case 'success':

             toastr.success("{{ Session::get('message') }}");

             break;

         case 'warning':

             toastr.warning("{{ Session::get('message') }}");

             break;

         case 'error':

           toastr.error("{{ Session::get('message') }}");

           break;

   }

 @endif

</script>


</body>
</html>



