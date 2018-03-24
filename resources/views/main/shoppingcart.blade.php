

@extends('main.navbar')

@section('content')

<style>
    .numberinput{
        color: black;
    }
</style>

    <div class="row">
        <div class="col-sm-12 col-md-12 ">
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>Product Name</th>
                    <th></th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Total</th>
                    
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>
                            <div class="media">
                                <a href="/product/{{$item->product->id}}"> <img class="media-object" src="/storage/{{$item->product->filename}}" style="width: 100px; "> </a>
                        </div>
                        </td>    
                                    
                               
                        <td><a href="/product/{{$item->product->id}}">{{$item->product->name}}</a></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center"></td>
                        <td class="col-sm-1 col-md-1 text-center">
                        
                        <form action="/shoppingcart/refresh" method= Get>
                        	<input name="{{$item->id}}" class="numberInput" type="number" min="1" max="100" step="1" value="{{$item->amount}}"/>
                        </form>
                        
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>${{$item->product->price}}</strong></td>
                        <td class="col-sm-1 col-md-1">
                            <a href="/removeItem/{{$item->id}}"> <button type="button" class="btn btn-danger">
                                    <span class="fa fa-remove"></span> Remove
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><h3>Total Price:</h3></td>
                    <td class="text-right"><h3><strong>${{$total}}</strong></h3></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="/"> <button type="button" class="btn btn-info">
                                <span class="fa fa-shopping-cart"></span> Continue Shopping
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="/checkout"> <button type="button" class="btn btn-success">Checkout<span class="fa fa-play"></span></button></a>
                    </td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

