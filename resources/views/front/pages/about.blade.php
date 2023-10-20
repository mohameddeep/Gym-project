@extends('front.layouts.app')


@section('title','about')
@section('class','about_gallery')


@section('content')



  <div class="main">
     <div class="about_banner_img"><img src="{{asset('front')}}/images/about_img.jpg" class="img-responsive" alt=""/></div>
       <div class="about_banner_wrap">
            <h1 class="m_11">About Us</h1>
         </div>
         <div class="about-wrapper">
            <div class="container">
             <div class="row about-top">
               <div class="col-md-5">
                <img src="{{asset('front')}}/images/about_img1.jpg" class="img-responsive" alt=""/>
               </div>
               <div class="col-md-7 about-left-text">
                 <h2>Lorem ipsum dolorsit!</h2>
                 <p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis <br>nostrud exerci tation ullamcorper suscipit lobortis.</p>
                 <h4>ullamcorper - <span class="m_12">Gymsport Responsible</span></h4>
               </div>
               <div class="clear"></div>
             </div>
          </div>
        </div>
        <div class="container">
         <div class="about_trainer">
            <h3 class="m_2">Our Trainers</h3>
            <div class="row about_box">

                @foreach ($trainers as $trainer )

                <div class="col-md-4">
                    <div class="box1">
                        <div class="box1_left">
                         <img src="{{asset('front')}}/images/trainer/{{ $trainer->image }}" class="img-responsive" alt=""/>
                        <div class="desc1">
                          <h3>{{ $trainer->name }}<br><span class="m_text">{{ $trainer->course->name }}</span></h3>
                          <p>{{ $trainer->description}}</p>
                          <div class="coursel_list">
                              <i class="a_heart"> </i>
                              <i class="like1"> </i>
                          </div>
                          <div class="coursel_list1">
                              <i class="a_twt"> </i>
                              <i class="a_fb"> </i>
                          </div>
                          <div class="clear"></div>
                       </div>
                      </div>
                      <div class="box1_right">
                        <h4>Qualifications</h4>
                        <p>{{ $trainer->qualification}} </p>
                         <h4>Speciality</h4>
                        <p class="para1">{{ $trainer->specality}}</p>
                      </div>
                     <div class="clear"></div>
                    </div>
                  </div>

                @endforeach

           </div>

         </div>
      </div>
      <div class="login">
            <div class="row login_details">
             <div class="col-md-6">
                <div class="join">
                     <h3>Why Join ?</h3>
                     <h4>sed diam nonummy nibh euismod</h4>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br> nibh euismod tincidunt ut laoreet dolore magna . </p>
                     <div class="btn3">
                     <a href="#">Join Today</a>
                   </div>
                </div>
              </div>
               <div class="col-md-6">
                <div class="join-right">
                     <h3>Why Join ?</h3>
                     <h4>sed diam nonummy nibh euismod</h4>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br> nibh euismod tincidunt ut laoreet dolore magna . </p>
                     <div class="buttons_login">
                     <div class="btn4">
                     <a href="login.html">Log In</a>
                   </div>
                   <div class="p-ww">
                    <form>
                     <input class="date" id="datepicker" type="text" value="View Calender" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'View Calender';}">
                    </form>
                   </div>
                   <div class="clear"></div>
                   <!---strat-date-piker---->
                <script src="js/jquery-ui.js"></script>
                <script>
                $(function() {
                  $( "#datepicker" ).datepicker();
                });
                </script>
                </div>
                </div>
              </div>
              <div class="clear"></div>
         </div>
    </div>
    <div class="testimonial">
           <div class="container">
               <i class="quot"> </i>
               <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendreri</p>
               <p class="ceo">quis nostrud, <span class="ceo1">tation - ullamcorper</span></p>
           </div>
     </div>
     @include('front.layouts.callery_partner')

     @endsection
