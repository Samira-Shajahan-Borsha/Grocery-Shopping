@extends('layout')
@section('content')
<h1>Product List</h1>
<table style="width: 100%; border: 1px solid black; margin: 50px;">
    <tr>
        <th>name</th>
        <th>sku</th>
        <th>description</th>
        <th>available_quantity</th>
        <th>purchase_price</th>
       
        
    </tr>

    @foreach ($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->sku}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->available_quantity}}</td>
        <td>{{$product->purchase_price}}</td>  
        
    </tr>
    @endforeach
    
</table>
@endsection
