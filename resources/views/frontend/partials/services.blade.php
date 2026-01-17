   <div class="col-12">
       <div class="some-page-wrapper">
           @foreach($services->chunk(3) as $chunk)
           <div class="row-box">

               @foreach($chunk as $service)
               <div class="column-box">
                   <div class="column">
                       <div class="violence-back">

                        <img src="{{ $service->service_icon }}" alt="{{ $service->name }}">

                           <a href="{{ route('frontend.service.show', $service->slug) }}"><span class="color-blue">
                               {{ $service->name }}
                           </span></a>

                           <div>
                               {{ $service->description }}
                           </div>
                           @if(isset($inside))
                           <div class="hover-effect-blog">
                               <a class="external" href="{{ route('frontend.service.show', $service->slug) }}" data-hover="المزيد "><span>المزيد </span></a>
                               <i class="ri-arrow-right-line fa-external-link"></i>
                           </div>
                           @endif

                       </div>
                   </div>
               </div>
               @endforeach

           </div>
           @endforeach
       </div>
   </div>
