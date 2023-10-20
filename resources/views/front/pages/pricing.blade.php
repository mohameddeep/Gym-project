@extends('front.layouts.app')

@section('title','offers')
@section('title','about_gallery')


@section('content')

<div class="main">
    <div class="about_banner_img"><img src="{{asset('front')}}/images/price.jpg" class="img-responsive" alt=""/></div>
      <div class="about_banner_wrap">
           <h1 class="m_11">Pricing</h1>
        </div>
       <div class="border"> </div>
         <div class="container">
           <div class="row price_plans">
              <h3 class="m_2">Pricing and plans</h3>
              <div class="price_plans_box">
                @foreach ($offers as $offer)
                <div class="col-md-3">
                    <ul class="price1">
                        <h4>{{ $offer->duration }}</h4>
                        <h3>{{ $offer->price }}</h3>
                        <ul class="price_list">

                           <p><img src="{{asset('front')}}/images/tick.png" alt="" align="middle" width="16" height="14"/><a href="#">{{ $offer->options }}</a></p>
                           <a class="popup-with-zoom-anim" href="#small-dialog"><li class="price_but">Buy Now</li></a>
                           <!-----pop-up-grid---->
                                    <div id="small-dialog" class="mfp-hide">
                                       <div class="pop_up">
                                            <div class="payment-online-form-left">
                                               <form action="{{ route('offer.store') }}" method="post">
                                                @csrf
                                                   <h4><span class="shipping"> </span>Shipping</h4>
                                                   <ul>
                                                       <li><input class="text-box-dark" name="fname" type="text" value="Frist Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Frist Name';}"></li>
                                                       <li><input class="text-box-dark" name="lname" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
                                                   </ul>
                                                   <ul>
                                                       <li><input class="text-box-dark" type="email"  name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
                                                       <li><input class="text-box-dark" type="text" name="company_name"  value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></li>
                                                   </ul>
                                                   <ul>
                                                       <li><input class="text-box-dark" type="text" name="phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
                                                       <li><input class="text-box-dark" type="text" name="address" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
                                                       <div class="clear"> </div>
                                                   </ul>
                                                   {{-- <ul>
                                                    <select name="user_id" id="">
                                                        <option value="" selected> select your user</option>
                                                        @foreach ($users as $user )
                                                        <option value="{{ $user ->id }}" > {{ $user ->lname . " " . $user ->fname }}</option>

                                                        @endforeach

                                                    </select>
                                                               <div class="clear"> </div>
                                                   </ul> --}}
                                                   <div class="clear"> </div>
                                               <ul class="payment-type">
                                                   <h4><span class="payment"> </span> Payments</h4>
                                                   <li>
                                                       <span class="col_checkbox">
                                                       <input value="visa" name="payment" id="3" class="css-checkbox1" type="checkbox">
                                                       <label for="3" name="demo_lbl_1" class="css-label1"> </label>
                                                       <a class="visa" href="#"> </a>
                                                       </span>
                                                   </li>
                                                   <li>
                                                       <span class="col_checkbox">
                                                           <input value="paypal" name="payment" id="4" class="css-checkbox2" type="checkbox">
                                                           <label for="4" name="demo_lbl_2" class="css-label2"> </label>
                                                           <a class="paypal" href="#"> </a>
                                                       </span>
                                                   </li>
                                                   <div class="clear"> </div>
                                               </ul>
                                                   <ul>
                                                       <li><input class="text-box-dark" type="text" name="card_number" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
                                                       <li><input class="text-box-dark" type="text" name="card_name" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
                                                       <div class="clear"> </div>
                                                   </ul>
                                                   <ul>
                                                       <li><input name="epiration_date" class="text-box-light hasDatepicker" type="date" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
                                                       <li><input name="security_code" class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
                                                       <div class="clear"> </div>
                                                   </ul>
                                                   <ul class="payment-sendbtns">
                                                       <li><input type="reset" value="Cancel"></li>
                                                       <li><input type="submit" value="Process order"></li>
                                                   </ul>
                                                   <div class="clear"> </div>
                                               </form>
                                           </div>
                                         </div>
                                   </div>
                                   <!-----pop-up-grid---->
                           <div class="clear"></div>
                       </ul>
                    </ul>
                 </div>
                @endforeach
                <div class="clear"></div>
                </div>

        </div>
       </div>
       <ul class="price_question">
        <div class="container">
           <li class="question_left"><h4>Have a question</h4><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p></li>
            <li class="question_right">1-300-248-2456</li>
           <div class="clear"></div>
        </div>
     </ul>
     <div class="container">
         <div class="row pricing">
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

     <div class="about_gallery">
        <div class="container">
        <div class="col-md-8">
           <h3 class="m_2">Gallery</h3>
               <div id="ca-container" class="ca-container">
                 <div class="ca-wrapper">

                       @foreach ($galleries as $gallery)

                     <div class="ca-item ca-item-8">
                       <div class="ca-item-main">
                           <div class="ca"><img src="{{asset('front')}}/images/gallery/{{ $gallery->image }}" alt=""/> </div>
                           <div class="ca"><img src="{{asset('front')}}/images/gallery/{{ $gallery->image }}" alt=""/> </div>
                       </div>
                   </div>

                       @endforeach

             </div>
          </div>
                 <script type="text/javascript">
                     $('#ca-container').contentcarousel();
                 </script>
        </div>
        <div class="col-md-4">
             <h3 class="m_2">Partner</h3>
           <ul class="partner">
               @foreach ($partners as $partner)

                   <li><img src="{{asset('front')}}/images/partner/{{ $partner->image }}" alt=""/></li>

               @endforeach
                <div class="clear"></div>
           </ul>
        </div>
        <div class="clear"></div>
       </div>
      </div>
      </div>



    @endsection
