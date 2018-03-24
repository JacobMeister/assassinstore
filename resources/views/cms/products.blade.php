@extends('main.navbar') 

 
@section('content')
 

        <div class="row">
            <div class="col-md-6">
                <a href="/cms/product/new"><button class="btn btn-success">New Product</button></a>
                <br>
                <h2>Active Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Image</td>
                    <td></td>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}$</td>
                            <td>{{$product->original_filename}}</td>
                            <td><a href="/cms/product/destroy/{{$product->id}}"><button class="btn btn-danger">Delete Product</button></a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

 		<div class="row">
            <div class="col-md-6">
                <h2>Archived Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Image</td>
                    <td></td>
                    </thead>
                    <tbody>
                    @foreach ($archivedProducts as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}$</td>
                            <td>{{$product->original_filename}}</td>
                            <td><a href="/cms/product/activate/{{$product->id}}"><button class="btn btn-success">Activate</button></a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
 		
@endsection