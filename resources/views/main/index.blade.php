@extends('main.navbar')
 

 
@section('content')
<style>

.col-element {
    height: 550px;
}
.custom-thumbnail {
    background-color: #444444;
    border: 1px solid #9f0000;
}
.custom-breadcrumb {
    background-color: #444444;
}

</style>
   
    	<div class="row">
        <div class="col-sm-12">
            <ul class="breadcrumb custom-breadcrumb" style="margin-bottom: 5px;">
                <li class="active"><a href="/">Home</a></li>
            </ul>
        </div>
    </div>
    
     <div class="col-md-12">
        <h1>Get the signature look!</h1>
        <br>
        <a href="/products/subcategory/Suits">
        	<img src="/storage/signaturelook.jpg" class="img-responsive">
        </a>
        <br>
        <br>
     </div>
         
    <div class="row">
        <div class="col-sm-12">
            <h1>Today's Highlighted products</h1>
            <h2>Covert Bundle</h2>
            <br>
            </div>
<!--             hardcoded daily features, bah -->
                @foreach ($productsCovert as $product)
 
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
                
                <div class="col-sm-12">
                    <h2>Complete your collection</h2>
                    <br>
                </div>
                @foreach ($productsTac4 as $product)
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
        
    
 
@endsection