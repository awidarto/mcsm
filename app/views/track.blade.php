@extends('layout.front')

@section('content')

<div class="row">
  <div class="login-form">
    <h3>Order Status</h3>
    <hr />
    <form action="{{ URL::to('track')}}" method="post" accept-charset="utf-8">
      <label for="phone">Phone / Mobile Number:</label>
      <input type="text" name="phone" id="phone" value="" />
      <input type="submit" name="track" id="" value="Track" class="button" />
    </form>
  </div>
</div>

@stop