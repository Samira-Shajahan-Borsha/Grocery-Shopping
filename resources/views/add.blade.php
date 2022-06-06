@extends('layout')
@section('content')
<h1>Add Product</h1>
<form action="add" method="post" style="margin:100px">
{{@csrf_field()}}
    Product Name: <input type="text" name="name" id=""> <br><br>
    sku: <input type="number" name="sku" id=""> <br><br>
    Description: <input type="text" name="description" id=""> <br><br>
    Available Quantity: <input type="text" name="available_quantity" id=""> <br><br>
    Purchase Price: <input type="text" name="purchase_price" id=""> <br><br>
    <button>Add Product</button>
    

   
</form>
@endsection