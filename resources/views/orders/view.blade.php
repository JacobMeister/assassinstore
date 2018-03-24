@extends('main.navbar')
 

 
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3>Order ID: {{$order->id}}</h3>
            <h3>Ordered on: {{$order->created_at}}</h3>
            <h3>Total price: ${{$order->price}}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Price</th>
                </tr>
                </thead>
                @foreach($order->orderItems as $item)
                    <tr>
                    	<td><a href="/product/{{$item->product->id}}"><img class="media-object" src="/storage/{{$item->product->filename}}" style="width: 100px; "></a></td>
                        <td><a href="/product/{{$item->product->id}}">{{$item->product->name}}</a></td>
                        <td>{{$item->amount}}</td>
                        <td>$ {{number_format($item->product->price,2,',','')}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection