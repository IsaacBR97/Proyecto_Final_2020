<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vendedor @yield('title')</title>

   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
     crossorigin="anonymous">

     <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
     <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
     <link href="{{asset('css/datepicker3.css')}}" rel="stylesheet">
     <link href="{{asset('css/styles.css')}}" rel="stylesheet">

     
     

</head>
<body>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
			<div class="navbar-header">
             <a class="navbar-brand" href="#"><span>Productos</span> vendedor</a>
            </div>
        </div>
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">

            <li class="active"><a href="#"><em class="fa fa-dashboard">&nbsp;</em> inicio</a></li>
            <li><a href="{{route('productos.index')}}"><em class="fa fa-calendar">&nbsp;</em>Productos</a></li>
			<li><a href="{{route('productos.create')}}"><em class="fa fa-clone"">&nbsp;</em> añadir producto</a></li>
			
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    @yield('content')

    </div>
    
</body>
</html>