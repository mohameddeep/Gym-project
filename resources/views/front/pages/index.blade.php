

@extends('front.layouts.app')

@section('title','home')
@section('class','row about')

@section('header')

<div class="header">
    <div class="container">
       <div class="header-text">
         <h1>Perfect Fitness</h1>
         <h2>Best Choice For your site</h2>
         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna</p>
         <div class="banner_btn">
             <a href="#">Read More</a>
         </div>
       </div>
       <div class="header-arrow">
          <a href="#menu" class="class scroll"><span> </span </a>
       </div>
     </div>
   </div>
@endsection



@section('content')
<div class="main">
    <div class="container">
      <!-- start content-top -->
      <div class="row content-top">
           <div class="col-md-5">
            <img src="{{asset('front')}}/images/pic.png" class="img-responsive" alt=""/>
           </div>
           <div class="col-md-7 content_left_text">
             <h3>Lorem ipsum dolor sit!</h3>
             <p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
           </div>
      </div>
   </div>
  <!-- end content-top -->
  <div class="container">
      <div class="row content-middle">
        <!-- start content-middle -->
        @foreach ($classes as $class )
        <div class="col-md-4"><a href="pricing.html">
            <ul class="spinning">
                <li class="live">live <span class="m_1">{{ $class->name }}</span></li>
                <li class="room">{{ $class->place }}</li>
                <div class="clear"></div>
            </ul>
            <div class="view view-fifth">
                <img src="{{asset('front')}}/images/class/{{ $class->image }}" class="img-responsive" alt=""/>
                 <div class="mask">
                      <div class="info">Read More</div>
                 </div>
             </div>
        </a></div>
        @endforeach


          <div class="clear"></div>
     </div>
    <!-- end content-middle -->
     <div class="row about">
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
      <div class="row content_middle_bottom">
        <div class="col-md-4">
          <h3 class="m_2">Our Trainers</h3>
           <div class="course_demo">
            <ul id="flexiselDemo3">
                @foreach ($trainers as $trainer)
                <li><img src="{{asset('front')}}/images/trainer/{{ $trainer->image }}" /><div class="desc">
                    <h3>{{ $trainer->name }}<br><span class="m_text">{{ $trainer->course?->name }}</span></h3>
                    <p>{{ $trainer ->description }}</p>
                    <div class="coursel_list">
                        <i class="heart1"> </i>
                        <i class="like"> </i>
                    </div>
                    <div class="coursel_list1">
                        <i class="twt"> </i>
                        <i class="fb"> </i>
                    </div>
                    <div class="clear"></div>
                </div></li>

                @endforeach


          </ul>
          <script type="text/javascript">
      $(window).load(function() {
          $("#flexiselDemo3").flexisel({
              visibleItems: 4,
              animationSpeed: 1000,
              autoPlay: true,
              autoPlaySpeed: 3000,
              pauseOnHover: true,
              enableResponsiveBreakpoints: true,
              responsiveBreakpoints: {
                  portrait: {
                      changePoint:480,
                      visibleItems: 1
                  },
                  landscape: {
                      changePoint:640,
                      visibleItems: 2
                  },
                  tablet: {
                      changePoint:768,
                      visibleItems: 2
                  }
              }
          });

      });
  </script>
  <script type="text/javascript" src="{{asset('front')}}/js/jquery.flexisel.js"></script>
</div>
</div>
<div class="col-md-4">
    <h3 class="m_2">Next Events</h3>
    <div class="events">
        @foreach ($events as $event)
        <div class="event-top">

            <ul class="event1">
                <h4>{{ $event -> event_date }}</h4>
                <img src="{{asset('front')}}/images/event/{{ $event -> image }}" alt=""/>
            </ul>
            <ul class="event1_text">
                <span class="m_5">{{ $event -> event_time }}</span>
                <h4>{{ $event -> topic }}</h4>
                <p>{{ $event -> event_descr }} </p>
                <div class="btn2">
                 <a href="#">Reservation</a>
              </div>
            </ul>

            <div class="clear"></div>

        </div>
        @endforeach

    </div>
</div>
<br>

<div class="col-md-4">
    <h3 class="m_2">From the blog</h3>
    <div class="blog_events">
        <ul class="tab-left1">
          <span class="tab1-img"><img src="{{asset('front')}}/images/pic7.jpg" alt=""></span>
          <div class="tab-text1">
           <p><a href="#">nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip</a></p>
           <span class="m_date">25 April, 2014</span>
          </div>
          <div class="clear"></div>
      </ul>
      <ul class="tab-left1">
          <span class="tab1-img"><img src="{{asset('front')}}/images/pic6.jpg" alt=""></span>
          <div class="tab-text1">
           <p><a href="#">soluta nobis eleifend option congue nihil imperdiet doming id</a></p>
           <span class="m_date">25 April, 2014</span>
          </div>
          <div class="clear"></div>
      </ul>
      <ul class="tab-last1">
          <span class="tab1-img"><img src="{{asset('front')}}/images/pic8.jpg" alt=""></span>
          <div class="tab-text1">
           <p><a href="#">quod mazim placerat facer possim assum. Typi non habent</a></p>
           <span class="m_date">25 April, 2014</span>
          </div>
          <div class="clear"></div>
      </ul>
    </div>
</div>

<div class="clear"></div>

</div>
@include('front.layouts.callery_partner')
<br>
<br>
<div class="map">
    <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2&amp;output=embed"> </iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2" style="color:#666;font-size:12px;text-align:left"> </a></small>
    <div class="opening_hours">
     <ul class="times">
         <h3>Opening <span class="opening">Hours</span></h3>
         <li><i class="calender"> </i><span class="week">Monday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
         <li><i class="calender"> </i><span class="week">Tuesday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
         <li><i class="calender"> </i><span class="week">Wednesday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
         <li><i class="calender"> </i><span class="week">Thrusday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
         <li><i class="calender"> </i><span class="week">Friday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
         <li><i class="calender"> </i><span class="week">Saturday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
         <li><i class="calender"> </i><span class="week">Sunday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
         <h4>Enjoy it!</h4>
     </ul>
    </div>
 </div>
 <div class="footer-top">
    <ul class="twitter_footer">
     <li>
       <i class="twt_icon"> </i><p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel  <span class="m_6">2 days ago</span></p>
       <div class="clear"></div>
     </li>
    </ul>
</div>


@endsection
