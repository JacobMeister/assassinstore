<html>

<head>
    <title>Assassinstore</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="/storage/target.png">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .opaque-container {
            background-color: rgba(0,0,0,0.7); 
            display: block;
            
        }
        body{
            background-image: url("/storage/background.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100%;
            margin: 0;
            color:  #ffffff;
        } 
        html{
            height: 100%;
            margin: 0;
        }
        a {
            color: #ffffff;
        }
        .search{
            width: 200px;
            color: black;
            margin-top: auto;
            margin-bottom: auto;
        }
    </style>
</head>
<body>

@section('sidebar')
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="pull-left"><img src="/storage/assassinstorelogo.png"></a> 
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
<!--                 if the user is admin, show links to admin pages-->
                	@if(Auth::user())
                		@if(Auth::user()->admin)
                    		<li><a href="/cms/products">Edit Products</a></li>
                    		<li><a href="/cms/users">Edit Users</a></li>
                    		<li><a href="/cms/orders">All Orders</a></li>
                		@endif
                	@endif
                		
                		<li><a href="/">Home</a></li>
                		<li class="dropdown"><a href="/products" class="dropdown-toggle" data-toggle="dropdown">Products <span class="caret"></span></a>
                    	
                    	<ul class="dropdown-menu">
                        <li><a href="/products/category/Guns"><h4>Guns</h4></a></li>
                        <li><a href="/products/subcategory/Pistols"><h5>Pistols</h5></a></li>
                        <li><a href="/products/subcategory/Shotguns"><h5>Shotguns</h5></a></li>
                        <li><a href="/products/subcategory/Submachine Guns"><h5>Submachine Guns</h5></a></li>
                        <li><a href="/products/subcategory/Assault Rifles"><h5>Assault Rifles</h5></a></li>
                        <li><a href="/products/subcategory/Sniper Rifles"><h5>Sniper Rifles</h5></a></li>
                        <br>
                        <li><a href="/products/category/Melee"><h4>Melee</h4></a></li>
                        <li><a href="/products/subcategory/Knives"><h5>Knives</h5></a></li>
                        <li><a href="/products/subcategory/Blunt"><h5>Blunt</h5></a></li>
                        <li><a href="/products/subcategory/Throwables"><h5>Throwables</h5></a></li>
                        <br>
                        <li><a href="/products/category/Gear"><h4>Gear</h4></a></li>
                        <li><a href="/products/subcategory/Tools"><h5>Tools</h5></a></li>
                        <li><a href="/products/subcategory/Distractions"><h5>Distractions</h5></a></li>
                        <li><a href="/products/subcategory/Explosives"><h5>Explosives</h5></a></li>
                        <li><a href="/products/subcategory/Poison"><h5>Poison</h5></a></li>
                        <br>
                        <li><a href="/products/category/Clothing"><h4>Clothing</h4></a></li>
                        <li><a href="/products/subcategory/Suits"><h5>Suits</h5></a></li>
                        <li><a href="/products/subcategory/Special"><h5>Special</h5></a></li>
                    	</ul>
                </li>
                        <li><a href="/about">About</a></li>
<!--                         depending of user login show login buttons or user options -->
                    @if(!Auth::user())
                        <li><a href="/auth/login">Log In</a></li>
                        <li><a href="/auth/register">Register</a></li>
                    @else
                        <li><a href="/orders">Orders <span class="fa fa-briefcase"></span></a></li>
                        <li><a href="/shoppingcart">Cart <span class="fa fa-shopping-cart"></span></a></li>
                        <li><a href="/auth/logout">Logout {{ Auth::user()->name}}</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
@show

<div class="container opaque-container">
<div style="padding-top:70px">@yield('content')</div>
    
</div>

</body>
</html>
