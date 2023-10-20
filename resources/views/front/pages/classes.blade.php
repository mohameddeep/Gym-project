@extends('front.layouts.app')

@section('title','classes')
@section('title','about_gallery')


@section('content')

<div class="main">
    <div class="about_banner_img"><img src="{{asset('front')}}/images/class_img.jpg" class="img-responsive" alt=""/></div>
      <div class="about_banner_wrap">
           <h1 class="m_11">Classes</h1>
       </div>
     <div class="border"> </div>
      <div class="container">
        <div class="classes_wrapper">


          <div class="row class_box1">
            @foreach ($trainers as $trainer )
            <div class="col-md-6">
                <div class="class_left">
                    <a href="single_class.html"><img src="{{asset('front')}}/images/class/{{ $trainer->course?->image }}"  class="img-responsive" alt=""/ title="continue"></a>
                </div>
                <div class="class_right">
                    <h3>{{ $trainer->course?->name }}</h3>
                    <p>{{ $trainer->course?->course_descr }}</p>
                    <div class="class_img">
                      <img src="{{asset('front')}}/images/trainer/{{  $trainer->image}}" alt=""/>
                      <div class="class_desc">
                          <h4>Trainer</h4>
                          <h5>{{  $trainer->name }}</h5>
                          <p>{{  $trainer->description }}</p>
                      </div>
                        <div class="clear"></div>
                         <ul class="buttons_class">
                           <li class="btn5"><a href="{{ route('class.show',$trainer->id)  }}">Read More</a></li>
                         <li class="btn6"><a href="#">Timetable</a></li>
                        <div class="clear"></div>
                     </ul>
                    </div>
                  </div>
                <div class="clear"></div>
              </div>
              <br>

            @endforeach

         <div class="clear"></div>
        </div>
        <div class="row classes_bottom">
            <div class="col-md-8">
                <h3 class="m_2">All Classes</h3>
                @foreach ($classes as $class)
                <div class="classes">
                    <div class="cardio_list">

                       <div class="cardio_sublist">
                        <ul class="cardio">
                            <li><i class="clock"> </i><span>{{ $class->name }}</span></li>
                        </ul>
                        <div class="social-media">
                           <ul>
                              <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
                              <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
                              <li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
                              <li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
                          </ul>
                     </div>
                        <div class="clear"></div>
                      </div>
                    </div>
                    <div class="cardio_list1">


                       <div class="cardio_sublist">
                        <ul class="cardio">
                            <li><i class="clock"> </i><span>{{ $class->name }}</span></li>
                        </ul>
                        <div class="social-media">
                           <ul>
                              <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
                              <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
                              <li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
                              <li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
                          </ul>
                     </div>
                        <div class="clear"></div>
                      </div>
                    </div>
                    <div class="clear"></div>
                </div>
                @endforeach

              </div>
             <div class="col-md-4">
               <h3 class="m_4">Membership Prices</h3>
               <div class="members">
                <h4 class="m_3">25% Discount of for all members</h4>
                <p>Discount on services and <br>treatments at the GymBase for<br> all membership cards holders.</p>
                <div class="btn1">
                 <a href="#">More</a>
                </div>
               </div>
             </div>
             <div class="clear"></div>
         </div>
         </div>
         <div class="traine_login">
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
               <script src="{{asset('front')}}/js/jquery-ui.{{asset('front')}}/js"></script>
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
    @include('front.layouts.callery_partner')
    <br>
    <br>
@endsection
