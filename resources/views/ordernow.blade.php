@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
        <tbody>
        <tr>
            <td>Amount</td>
            <td>{{$total}}/-</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>0.00/-</td>
        </tr>
        <tr>
            <td>Delivery Charges</td>
            <td>100/-</td>
        </tr>
        <tr>
          <td>Total</td>
            <td>{{$total + 100}}</td>
        </tr>
        </tbody>
        </table>

    <div>
        <form action="/orderplace" method="POST">
        <div class="form-group">
            @csrf
            <textarea name="address" placeholder="Enter Your Address" row="5" cols="170"></textarea>
        </div>
        <div class="form-group">
            <label for="pwd">Payment Method</label><br><br>
            <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
            <input type="radio" value="cash" name="payment"><span>EMI</span><br><br>
            <input type="radio" value="cash" name="payment"><span>Cash On Deliver</span><br><br>
        </div>
        
        <button type="submit" class="btn btn-success">ORDER</button>
        </form>
    </div>
    </div>
</div>
@endsection

