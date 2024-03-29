@extends('front.layouts.app')


@section('title','register')


@section('content')

<div class="main">
    <div class="register-grids">
        <div class="container">
                  <form action="{{ route('user.register') }}" method="post">
                    @csrf
                          <div class="register-top-grid">
                                  <h3>PERSONAL INFORMATION</h3>
                                  <div>
                                      <span>First Name<label>*</label></span>
                                      <input type="text" name="fname">
                                  </div>
                                  <div>
                                      <span>Last Name<label>*</label></span>
                                      <input type="text" name="lname">
                                  </div>
                                  <div>
                                      <span>Email Address<label>*</label></span>
                                      <input type="email" name="email">
                                  </div>
                                  <div class="clear"> </div>
                                      <a class="news-letter" href="#">
                                          <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                                      </a>
                                  <div class="clear"> </div>
                          </div>
                          <div class="clear"> </div>
                          <div class="register-bottom-grid">
                                  <h3>LOGIN INFORMATION</h3>
                                  <div>
                                      <span>Password<label>*</label></span>
                                      <input type="password" name="password">
                                  </div>
                                  <div>
                                      <span>Confirm Password<label>*</label></span>
                                      <input type="password" name="password_confirmation">
                                  </div>
                                  <div class="clear"> </div>
                          </div>
                          <div class="clear"> </div>
                          <input type="submit" value="submit">
                  </form>
              </div>
          </div>
   </div>
@endsection
