@extends('main.navbar')
 

 
@section('content')
 
    <div class="row">
        <div class="col-md-12">
<!--         change text depending on whether it's the cms page or the user page -->
            <h2>{{$text}}</h2>
        </div>
    </div>
    <div class="row">
         <div class="col-md-12">
            <table class="table ">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Total Price</th>
                  
                </tr>
                </thead>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td><a href="/order/{{$order->id}}"> {{$order->created_at}}</a></td>
                        <td><a href="/order/{{$order->id}}"> ${{$order->price}}</a></td>
                        
                    </tr>
                @endforeach
 
            </table>
        </div>
    </div>
@endsection