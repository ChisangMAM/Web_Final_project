<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chuol</title>
  <!-- {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> --}} -->
  <style>
      table , th , td{
      border: 1px solid black;
      }
  </style>
  

</head>
<body>
  <div class="super_container">
        <!-- {{-- @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div><br /> 
      @endif --}} -->
      <table >
        <thead>
            <tr>
              <td>ID</td>
              <!-- {{-- <td>Customer</td>
              <td>Product</td>
              <td>Quantity</td>
              <td>Price</td> --}} -->
              <td>Receive Date</td>
              <td>Pickup Date</td>
              <td>Delivery Company</td>
              <td>Payment</td>
              <td>Location</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($order as $orders)
            <tr>
                <td>{{$orders->id}}</td>
                <td>{{$orders->receive_date}}</td>
                <td>{{$orders->pickup_date}}</td>
                <td>{{$orders->delivery_company}}</td>
                <td>{{$orders->payment}}</td>
                <td>{{$orders->location}}</td>
            </tr>
            @endforeach
        </tbody>
        
      </table>
  </div>
  <!-- {{-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> --}} -->
</body>
</html>