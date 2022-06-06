@extends('layout')
@section('content')

    <h1>Place Order</h1>
    <form action="add" method="post" style="margin:100px">
    {{@csrf_field()}}
        <label for="product">Choose a product: </label>
                <select id="product">
                    <option value="dairymilk">Dairy Milk</option>
                    <option value="jackfruit">Jack Fruit</option>
                    <option value="cateberry">Cateberry</option>
                </select> <br><br>
        Price: <input type="number" name="price" id=""> <br><br>
        Quantity: <input type="text" name="quantity" id=""> <br><br>
        Invoice Num: <input type="text" name="invoiceNum" id=""> <br><br>
       <label for="product">Choose a method:</label>
                <select id="product">
                    <option value="cash">Cash</option>
                    <option value="dairymilk">BKash</option>
                    <option value="jackfruit">Nagad</option>
                    <option value="cateberry">Rocket</option> 
                </select><br><br>
        <button>Confirm Order</button>
        

    
    </form>
@endsection
