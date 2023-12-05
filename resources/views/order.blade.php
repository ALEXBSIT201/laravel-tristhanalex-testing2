@extends('layout.app')

@section('content')
<br>
<h1 class="text-success">Manage Order</h1>
<br>
<div>
  <table class="table table-dark table-striped">
<thread>
    <tr>
        <th>OrderId</th>
        <th>OrderDate</th>
        <th>TotalAmount</th>
        <th>Status</th>
    </tr>   
</thread>

<tbody>
    <td>Mickey</td>
    <td>Mickey</td>
    <td>Mickey</td>
    <td>Mickey</td>

</tbody>

<tbody>
    <td>Mickey</td>
    <td>Mickey</td>
    <td>Mickey</td>
    <td>Mickey</td>

</tbody>
</div>

    <div class="row">
        <form>
            
            <label class="col"><h6>Order Date</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col" ><h6>Total Amount</h6></label>
            <input class="inputs" type="number" placeholder="Input here..">
            
            <label class="col" ><h6>Status</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
           
            <div class="col">
                <select name="type" id="type">
                    <option value="Add" pattern="ADD" >ADD</option>
                    <option value="Remove" pattern="Remove" >REMOVE</option>
                </select>
            </div>
            <div class="col" >
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
        <br>
</div>  


@endsection

@section('title')
    Order
@endsection