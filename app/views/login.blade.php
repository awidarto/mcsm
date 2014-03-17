@extends('layout.front')

@section('content')

<div class="row">
  <div class="login-form">
    <h3>Sign in</h3>
    <hr />
    <ul class="button-group">
      <li><a href="#" class="button primary"><i class="fa fa-twitter"></i> Twitter</a></li>
      <li><a href="#" class="button"><i class="fa fa-github"></i> Github</a></li>
      <li><a href="#" class="button danger"><i class="fa fa-google-plus"></i> Google</a></li>
    </ul>
    <br />
    <form action="#" method="get" accept-charset="utf-8">
      <label for="email">Email:</label>
      <input type="email" name="" id="email" value="" />
      <label for="password">Password:</label>
      <input type="password" name="" id="password" value="" />
      <input type="submit" name="" id="" value="Sign In" class="button" />
    </form>
  </div>
</div>

@stop