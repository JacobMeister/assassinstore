@extends('main.navbar')
 

 
@section('content')

<style>
    .panel-body{
        background: #444444;
    }
    .custom-breadcrumb {
    background-color: #444444;
    }
    
</style>

        <div class="row">
        <div class="col-sm-12">
            <ul class="breadcrumb custom-breadcrumb" style="margin-bottom: 5px;">
            	<li><a href="/">Home</a></li>
            	<li><a href="/products">Products</a></li>
                <li><a href="/products/category/{{$product->category}}">{{$product->category}}</a></li>
                <li><a href="/products/subcategory/{{$product->subcategory}}">{{$product->subcategory}}</a></li>
                <li class="active"><a href="/product/{{$product->id}}">{{$product->name}}</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">{{$product->name}}</div>
                <div class="panel-body">
                    
                        <img src="/storage/{{$product->filename}}" class="img-responsive"/>
                    
                </div>
            </div>
        </div>
        <div class="col-xs-8">
            <div class="panel panel-default">
                <div class="panel-heading">Product Details</div>
                <div class="panel-body">
                    <h1>{{$product->name}}</h1>
                    <h3>Price: $ {{$product->price}}</h3>
                  	<br>
                    <h4>{{$product->description}}</h4>
                    <br/>
                    <div class="row">
                                    <div class="col-md-6 col-md-offset-8">
<!--                                    if the product is archived, buying the item is disabled -->
                                    	@if($product->archived)
                                    	Out of stock
                                        <a class="btn btn-success btn-product" disabled><span  class="fa fa-shopping-cart"></span> Buy</a></div>
                                        @else
                                        Available
                                        <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product"><span  class="fa fa-shopping-cart"></span> Buy</a></div>
                                        @endif
                                </div>
                </div>
            </div>
        </div>
    </div>

@endsection