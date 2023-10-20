@extends('front.layouts.app')

@section('title','contact')


@section('content')
<div class="main">
    <iframe width="100%" height="420" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2&amp;output=embed"> </iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2" style="color:#666;font-size:12px;text-align:left"> </a></small>
     <div class="about_banner_wrap">
          <h1 class="m_11">Contact</h1>
       </div>
       <div class="border"> </div>
       <div class="rwo contact">
         <div class="container">
            <div class="col-md-8 contact-top">
           <h3>Send us a message</h3>
           <p class="contact_msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
              <form method="post" action="{{ route('contact.store') }}">
                @csrf
                 <div class="to">
                      <input type="text" class="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                      <input type="text" class="email" name="email"  value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:20px">
                      <input type="text" class="text" name="subject"  value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left:20px">
                 </div>
                 <div class="text">
                    <textarea  name="message" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
                 </div>
                 <div class="form-submit1">
                    <input name="submit" type="submit" id="submit" value="Submit Your Message"><br>
                    <p class="m_msg">Make sure you put a valid email</p>
                 </div>
                 <div class="clear"></div>
              </form>
          </div>
          <div class="col-md-4 contact-top_right">
           <h3>contact info</h3>
           <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
           <ul class="contact_info">
               <li><i class="mobile"> </i><span>+1-900-235-2456</span></li>
               <li><i class="message"> </i><span class="msg">info(at)gym.com</span></li>
           </ul>
           </div>
         </div>
     </div>
      <div class="trainers_middle_bottom">
          <div class="container">
           <div class="col-md-4">
            <div class="contact_hours">
              <ul class="times_contact">
                  <h3>Opening <span class="opening">Hours</span></h3>
                  <li><i class="calender"> </i><span class="contact_week">Monday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                  <li><i class="calender"> </i><span class="contact_week">Tuesday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                  <li><i class="calender"> </i><span class="contact_week">Wednesday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                  <li><i class="calender"> </i><span class="contact_week">Thrusday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                  <li><i class="calender"> </i><span class="contact_week">Friday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                  <li><i class="calender"> </i><span class="contact_week">Saturday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                  <li><i class="calender"> </i><span class="contact_week">Sunday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                  <h4>Enjoy it!</h4>
              </ul>
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
      <div class="contact_bottom">
        <ul class="join_text">
            <h3>Why Join ? <span class="m_26"> eleifend option congue nihil</span></h3>
            <p>lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
       </ul>
        <ul class="btn_contact">
          <a href="#">Join Today</a>
       </ul>
       <div class="clear"></div>
      </div>
  <div class="clear"></div>
  </div>
  </div>
  @include('front.layouts.callery_partner')
  <br>
  <br>
@endsection
