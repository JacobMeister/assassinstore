@extends('main.navbar')
 

 
@section('content')
<style>

.col-element {
    height: 500px;
    
}
.custom-thumbnail {
    background-color: #444444;
    border: 1px solid #9f0000;
}
.custom-breadcrumb {
    background-color: #444444;
}

.search{
    width: 200px;
    color: black;
    margin-bottom: 10px;
    float: right;
}

.searchbutton{
}

</style>

    <div class="row">
        <div class="col-sm-12">
            <ul class="breadcrumb custom-breadcrumb" style="margin-bottom: 5px;">
            	<li><a href="/">Home</a></li>
            	<li><a href="/products">Products</a></li>
<!--             	depending of the active category and subcategory breadcrumbs will be created accordingly -->
            	@if($category)
                <li><a href="/products/category/{{$category}}">{{$category}}</a></li>
                @endif
                @if($subcategory)
                <li><a href="/products/subcategory/{{$subcategory}}">{{$subcategory}}</a></li>
              	@endif
              	
              	<div class="search">
                    <form action="/products/search" method= Get >
                      <input type="text" placeholder="Search products" name="search" ">
                    </form>
				</div>
				
            </ul>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                @foreach ($products as $product)
 
                    <div class="col-sm-6 col-md-4 col-element">
                        <div class="thumbnail custom-thumbnail">
                        <a href="/product/{{$product->id}}"  >
                           <img src="/storage/{{$product->filename}}" class="img-responsive">
                            
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>{{$product->name}}</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3>
                                            <label>${{$product->price}}</label></h3>
                                    </div>
                                </div>
                                <p>{{$product->description}}</p>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-8">
                                        <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

 
@endsection