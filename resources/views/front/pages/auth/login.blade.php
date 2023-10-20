@extends('front.layouts.app')


@section('title','login')
@section('css')

<style>
    .loginbox{display: none}
</style>

@endsection


@section('content')

<div class="main">
    <div class="login_top">
        <div class="container">
        <div class="col-md-6">
           <div class="login-page">
              <h4 class="title">New Customers</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
              <div class="button1">
                 <a class="loginbox" id='user' href="{{ route('register.view') }}"><input type="submit" name="Submit" value="Create an Account"></a>
               </div>
               <div class="clear"></div>
            </div>
          </div>
          <div class="col-md-6">
           <div class="login-page">
            <div class="login-title">
                 <h4 class="title">Registered Customers</h4>
                 <div class="form-group">
                    <label for="">determine login way</label>
                    <select class="form-control" id="selectchoose">
                        <option value="" selected disabled>choose status</option>
                        <option value="user">login as user</option>
                        <option value="admin">login as admin</option>
                        <option value="trainer">login as trainer</option>
                    </select>
                </div>
                {{-- login user --}}
              <div id="user" class="loginbox">
               <h5 class="font-weight-semibold mb-4">login as user</h5>
                  <form action="{{ route('user.login') }}" method="post"  name="login" id="login-form">
                    @csrf
                    <fieldset class="input">
                      <p id="login-form-username">
                        <label for="modlgn_username">Email</label>
                        <input id="modlgn_username" type="email" name="email" class="inputbox" size="18" autocomplete="off">
                      </p>
                      <p id="login-form-password">
                        <label for="modlgn_passwd">Password</label>
                        <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
                      </p>
                      <div class="remember">
                          <p id="login-form-remember">
                            <label for="modlgn_remember"><a href="{{ route('password.email') }}">Forget Your Password ? </a></label>
                         </p>
                          <input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>
                       </div>
                    </fieldset>
                   </form>
              </div>
                {{-- login admin --}}
              <div id="admin" class="loginbox">
                <h5 class="font-weight-semibold mb-4">login as admin</h5>
                  <form action="{{ route('admin.login') }}" method="post"  name="login" id="login-form">
                    @csrf
                    <fieldset class="input">
                      <p id="login-form-username">
                        <label for="modlgn_username">Email</label>
                        <input id="modlgn_username" type="email" name="email" class="inputbox" size="18" autocomplete="off">
                      </p>
                      <p id="login-form-password">
                        <label for="modlgn_passwd">Password</label>
                        <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
                      </p>
                      <div class="remember">
                          <p id="login-form-remember">
                            <label for="modlgn_remember"><a href="#">Forget Your Password ? </a></label>
                         </p>
                          <input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>
                       </div>
                    </fieldset>
                   </form>
              </div>
                {{-- login trainer --}}
              <div id="trainer" class="loginbox">
                <h5 class="font-weight-semibold mb-4">login as trainer</h5>
                  <form action="{{ route('trainer.login') }}" method="post"  name="login" id="login-form">
                    @csrf
                    <fieldset class="input">
                      <p id="login-form-username">
                        <label for="modlgn_username">Email</label>
                        <input id="modlgn_username" type="email" name="email" class="inputbox" size="18" autocomplete="off">
                      </p>
                      <p id="login-form-password">
                        <label for="modlgn_passwd">Password</label>
                        <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
                      </p>
                      <div class="remember">
                          <p id="login-form-remember">
                            <label for="modlgn_remember"><a href="#">Forget Your Password ? </a></label>
                         </p>
                          <input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>
                       </div>
                    </fieldset>
                   </form>
              </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
   </div>
@endsection



@section('js')

        <script>

                $('#selectchoose').change(function(){
                    var myid = $(this).val();
                    $('.loginbox').each(function(){
                        myid === $(this).attr('id') ? $(this).show() : $(this).hide();
                    });
                });
        </script>
@endsection

