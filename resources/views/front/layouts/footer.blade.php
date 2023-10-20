
<div class="footer-bottom">
  <div class="container">
     <div class="row section group">
       <div class="col-md-4">
          <h4 class="m_7">Newsletter Signup</h4>
          <p class="m_8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy.</p>
             <form class="subscribe">
                <input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
             </form>
             <div class="subscribe1">
               <a href="#">Submit Email<i class="but_arrow"> </i></a>
             </div>
       </div>
       <div class="col-md-4">
           <div class="f-logo">
               <img src="{{ asset('front') }}/images/logo.png" alt=""/>
           </div>
           <p class="m_9">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis</p>
           <p class="address">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">(00) 222 666 444</span></p>
           <p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">info[at]mycompany.com</span></p>
       </div>
       <div class="col-md-4">
        {{-- @if (auth('user')->check() || auth('admin')->check() || auth('admin')->check())

        @endif --}}
           <ul class="list">
               <h4 class="m_7">Menu</h4>
               <li><a href="{{ route('home.index') }}">Home</a></li>
               <li><a href="{{ route('about.index') }}">About</a></li>
               <li><a href="{{ route('trainer.index') }}">Trainers</a></li>
               <li><a href="{{ route('class.index') }}">Classes</a></li>
               <li><a href="{{ route('offer.index') }}">Pricing</a></li>

               <li><a href="{{ route('contact.index') }}">Contact</a></li>
           </ul>
           <ul class="list1">
               <h4 class="m_7">Community</h4>
               <li><a href="#">Blog</a></li>
               <li><a href="#">Forum</a></li>
               <li><a href="#">Support</a></li>
               <li><a href="#">Newsletter</a></li>
           </ul>
       </div>
       <div class="clear"></div>
       </div>
    </div>
</div>
<div class="copyright">
 <div class="container">
   <div class="copy">
       <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
   </div>
   <div class="social">
      <ul>
         <li class="facebook"><a href="#"><span> </span></a></li>
         <li class="twitter"><a href="#"><span> </span></a></li>
         <li class="pinterest"><a href="#"><span> </span></a></li>
         <li class="google"><a href="#"><span> </span></a></li>
         <li class="tumblr"><a href="#"><span> </span></a></li>
         <li class="instagram"><a href="#"><span> </span></a></li>
         <li class="rss"><a href="#"><span> </span></a></li>
      </ul>
   </div>
  <div class="clear"></div>
 </div>
</div>
@yield('js')
</body>
</html>
