@extends('front.layouts.app')

@section('title','single classe')


@section('content')

<div class="main">
    <div class="about_banner_img"><img src="{{asset('front')}}/images/single_class.jpg" class="img-responsive" alt=""/></div>
      <div class="about_banner_wrap">
           <h1 class="m_11">Classes <span class="class_1">&nbsp;&nbsp; >&nbsp;&nbsp;&nbsp;&nbsp; {{ $class ->course?-> name }}</span></h1>
        </div>
      <div class="border"> </div>
       <div class="container">
        <div class="row single-top">
             <div class="col-md-8">
              <div class="single_class-left">
               <img src="{{asset('front')}}/images/class/{{ $class->course?->image }}" alt=""/>
               <div class="singe_desc">
                 <p> {{ $class->course?->course_descr }} </p>
                 <ul class=single_grid>
                     <li class="grid1">
                       <h3 class="m_13">Trainer</h3>
                       <img src="{{asset('front')}}/images/trainer/{{ $class->image }}" class="img-responsive" alt=""/>
                       <h4>{{ $class->name }}<br><span class="m_text">{{ $class->course?->name }}</span></h4>
                       <p>{{ $class->description }}</p>
                     </li>
                     <li class="grid2">
                        <h3 class="m_13">Featured</h3>
                        <ul class="list1_class">
                             <li><a href="#">nostrud exerci tation</a></li>
                             <li><a href="#">exerci tation ullamcor</a></li>
                             <li><a href="#">dolore eu feugiat tation</a></li>
                          <li><a href="#">claritatem insitam tation</a></li>
                          <li><a href="#">nostrud exerci tation</a></li>
                          <li><a href="#">exerci tation ullamcor</a></li>
                        </ul>
                     </li>
                     <li class="grid3">
                        <h3 class="m_13">Pricing of class</h3>
                        <ul class="list2_class">
                          <li><a href="#">3 days session<p class="price">$ &nbsp;&nbsp;19,90 </p></a><div class="clear"></div></li>
                          <li><a href="#">7 days session<p class="price">$ &nbsp;&nbsp;15,90 </p></a><div class="clear"></div></li>
                          <li><a href="#">15 days session<p class="price">$ &nbsp;&nbsp;27,90 </p></a><div class="clear"></div></li>
                          <li><a href="#">50 days session<p class="price">$ &nbsp;&nbsp;45,90 </p></a><div class="clear"></div></li>
                          <li><a href="#">30 days session<p class="price">$ &nbsp;&nbsp;65,90 </p></a><div class="clear"></div></li>
                        </ul>
                     </li>
                     <div class="clear"></div>
                 </ul>
               </div>
              </div>
              </div>
              <div class="col-md-4 single_class-right">
                 <ul class="single_times">
                      <h3>Opening <span class="opening">Hours</span></h3>
                      <li><i class="calender"> </i><span class="week_class">Monday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Tuesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Wednesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Thrusday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Friday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Saturday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Sunday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                  </ul>
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
       <div class="login">
         <div class="row login_details">
            <div class="col-md-6 col_1_of_login span_1_of_login">
               <div class="join">
                    <h3>Why Join ?</h3>
                    <h4>sed diam nonummy nibh euismod</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br> nibh euismod tincidunt ut laoreet dolore magna . </p>
                    <div class="btn3">
                    <a href="#">Join Today</a>
                  </div>
               </div>
             </div>
              <div class="col-md-6 col_1_of_login span_1_of_login">
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
      <div class="testimonial">
          <div class="container">
              <i class="quot"> </i>
              <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendreri</p>
              <p class="ceo">quis nostrud, <span class="ceo1">tation - ullamcorper</span></p>
          </div>
      </div>
     </div>
@endsection
