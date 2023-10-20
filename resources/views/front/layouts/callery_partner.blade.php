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

