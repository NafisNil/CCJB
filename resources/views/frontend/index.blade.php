@extends('frontend.layout.master')
@section('title')
    Index - Centre for Climate Justice
@endsection
@section('content')
<div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 0px 0px;">
    <div class="gdlr-core-pbf-background-wrap"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-27675">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-background-wrap">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('frontend')}}/demos/chariti/demo3/upload/hp3-col-bg-1.png) ;background-repeat: no-repeat ;background-position: top left ;" data-parallax-speed="0"></div>
                    </div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 10px;margin-right: 20px;max-width: 65px ;"><img src="{{asset('frontend')}}/demos/chariti/demo3/upload/hp3-col-1.png" alt="" width="102" height="102" title="hp3-col-1" /></div>
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 10px ;">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 29px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Our Mission</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">
                                        <p class="p1">{!! $mission->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-1189">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-background-wrap">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('frontend')}}/demos/chariti/demo3/upload/hp3-col-bg-1.png) ;background-repeat: no-repeat ;background-position: top left ;" data-parallax-speed="0"></div>
                    </div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 10px;margin-right: 20px;max-width: 62px ;"><img src="{{asset('frontend')}}/demos/chariti/demo3/upload/hp3-col-2.png" alt="" width="87" height="87" title="hp3-col-2" /></div>
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 10px ;">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 29px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Our Vision</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">
                                        <p class="p1">{!!$vision->description!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-16098">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-background-wrap">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('frontend')}}/demos/chariti/demo3/upload/hp3-col-bg-1.png) ;background-repeat: no-repeat ;background-position: top left ;" data-parallax-speed="0"></div>
                    </div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " id="whatwedo">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 10px;margin-right: 20px;max-width: 62px ;"><img src="{{asset('frontend')}}/demos/chariti/demo3/upload/hp3-col-3.png" alt="" width="80" height="80" title="hp3-col-3" /></div>
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 10px ;">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 29px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">What We Do</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">
                                        <p class="p1">{!! $whatwedo->description!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gdlr-core-pbf-wrapper " style="padding: 50px 0px 30px 0px;" id="gdlr-core-wrapper-1">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('frontend')}}/demos/chariti/demo3/upload/hp3-donate-bg-2.jpg) ;background-size: cover ;background-position: bottom center ;" data-parallax-speed="0"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom">
            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-72966">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 650px ;">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-image-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 85px ;">
                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;max-width: 75px ;"><img src="{{asset('frontend')}}/demos/chariti/demo3/upload/hp3-col-divider.png" alt="" width="131" height="40" title="hp3-col-divider" /></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 59px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Become a member ?<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                            </div>
                        </div>
                 
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-3677">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 70px 0px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="frmaster-cause-donation-item gdlr-core-item-pdb gdlr-core-item-pdlr clearfix">
                                <form class="frmaster-cause-donation-form" method="get" action="#">
                                    <input type="hidden" name="cause_id" value="7743" />
                                    
                                    <div class="clear"></div>
                                    <input type="submit" value="Join Us" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gdlr-core-pbf-wrapper " style="padding: 115px 0px 90px 0px;">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('frontend')}}/demos/chariti/demo3/upload/hp3-blog-bg.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 65px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 14px ;font-weight: 700 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #a3d1be ;margin-bottom: 5px ;">Get updated</span>
                    <div class="gdlr-core-title-item-title-wrap ">
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 42px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Happening Now<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column-with-frame gdlr-core-item-pdlr" style="padding-bottom: 55px ;">
                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="carousel" data-column="3" data-move="1" data-nav="navigation-outer" data-nav-parent="self" data-vcenter-nav="1">
                        <div class="gdlr-core-flexslider-custom-nav  gdlr-core-style-navigation-outer gdlr-core-center-align"><i class="icon-arrow-left flex-prev" style="color: #ffffff ;font-size: 38px ;"></i><i class="icon-arrow-right flex-next" style="color: #ffffff ;font-size: 38px ;"></i></div>
                        <ul class="slides">

                            @foreach ($activity as $item)
                            <li class="gdlr-core-item-mglr">
                                <div class="gdlr-core-blog-grid gdlr-core-style-2 gdlr-core-js  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background " data-sync-height="blog-item-1">
                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                        <a href="{{route('projectid.us',$item->id)}}"><img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" width="700" height="450" title="jordane-mathieu-nnJtKp37UOE-unsplash" /></a>
                                    </div>
                                    <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position" style="padding-top: 30px;padding-bottom: 20px;padding-left: 40px;">
                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class="gdlr-core-blog-info-sep" >•</span><span class="gdlr-core-head"><i class="icon-clock" ></i></span><a href="{{asset('frontend')}}/demos/chariti/demo3/singleblog.html">{{$item->tag}}</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-blog-info-sep" >•</span><span class="gdlr-core-head"><i class="fa fa-user" ></i>
                                        </div>
                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 22px ;font-weight: 700 ;"><a href="{{route('projectid.us',$item->id)}}" >{{$item->title}}</a></h3>
                                        <div class="gdlr-core-blog-content clearfix"></div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                 
 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border" href="{{route('projects.us')}}" style="padding: 12px 31px 15px 31px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;background: #3bcf93 ;"><span class="gdlr-core-content" >View All Projects</span></a></div>
            </div>
        </div>
    </div>
</div>



<div class="gdlr-core-pbf-wrapper " style="padding: 150px 0px 110px 0px;" data-skin="Homepage 3 Event">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('frontend')}}/demos/chariti/demo3/upload/hp3-event-bg.jpg) ;background-repeat: repeat-x ;background-position: center ;" data-parallax-speed="0"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 65px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 14px ;font-weight: 700 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #a3d1be ;margin-bottom: 5px ;">Get Involved</span>
                    <div class="gdlr-core-title-item-title-wrap ">
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 42px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Upcoming Events<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-event-item gdlr-core-item-pdb">
                    <div class="gdlr-core-event-item-holder clearfix">
                        <div class="gdlr-core-column-30">
                            <div class="gdlr-core-event-item-list gdlr-core-item-pdlr  gdlr-core-style-widget  gdlr-core-event-widget-feature gdlr-core-with-border clearfix">
                                <div class="gdlr-core-event-widget clearfix">
                                    <div class="gdlr-core-evet-widget-thumbnail gdlr-core-media-image  gdlr-core-extend">
                                        <a href="{{asset('frontend')}}/demos/chariti/demo3/single-event.html"><img src="{{(!empty($eventfirst->logo))?URL::to('storage/'.$eventfirst->logo):URL::to('image/no_image.png')}}" alt="" width="1550" height="490" title="product-school-nOvIa_x_tfo-unsplash" /></a>
                                    </div>
                                    <div class="gdlr-core-event-widget-inner clearfix">
                                        <div class="gdlr-core-event-item-content-wrap">
                                            <h3 class="gdlr-core-event-item-title"><a href="{{asset('frontend')}}/demos/chariti/demo3/single-event.html" >{{$eventfirst->title}}</a></h3>
                                            <div class="gdlr-core-event-item-info-wrap"><span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-time"><span class="gdlr-core-head" ><i class="icon_clock_alt" ></i></span><span class="gdlr-core-tail">{{$eventfirst->date}}</span></span><span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-location"><span class="gdlr-core-head" ><i class="icon_pin_alt" ></i></span><span class="gdlr-core-tail">{{$eventfirst->place}}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-column-30">

                            @foreach ($event as $item)
          
                            <div class="gdlr-core-event-item-list gdlr-core-item-pdlr  gdlr-core-style-widget  gdlr-core-with-border clearfix">
                                <div class="gdlr-core-event-widget clearfix">
                                    <div class="gdlr-core-event-item-content-wrap">
                                        <h3 class="gdlr-core-event-item-title"><a href="{{route('eventid.us',$item->id)}}" >{{$item->title}}</a></h3>
                                        <div class="gdlr-core-event-item-info-wrap"><span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-time"><span class="gdlr-core-head" ><i class="icon_clock_alt" ></i></span><span class="gdlr-core-tail">{{$item->date}}</span></span><span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-location"><span class="gdlr-core-head" ><i class="icon_pin_alt" ></i></span><span class="gdlr-core-tail">{{$item->place}}</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                       
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-center-align gdlr-core-button-no-border" href="#" style="padding: 12px 31px 15px 31px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;background: #3bcf93 ;"><span class="gdlr-core-content" >View All Event</span></a></div>
            </div>
        </div>
    </div>
</div>
<div class="gdlr-core-pbf-wrapper " style="padding: 100px 0px 80px 0px;" id="gdlr-core-wrapper-5">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
    </div>

</div>
<div class="gdlr-core-pbf-wrapper ">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('frontend')}}/demos/chariti/demo3/upload/hp3-newsletter-bg.jpg) ;background-size: cover ;background-position: top center ;" data-parallax-speed="0"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" data-skin="Homepage 3 Newsletter" id="gdlr-core-column-41858">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 90px 50px 60px 50px;" data-sync-height="col-event">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content" style="max-width: 550px ;">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 35px ;"><i class=" gdlr-core-icon-item-icon fa5r fa5-envelope-open" style="color: #ffffff ;font-size: 61px ;min-width: 61px ;min-height: 61px ;"></i></div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 42px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #3bcf93 ;">Newsletter<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 20px ;">
                                <div class="gdlr-core-text-box-item-content" style="font-size: 20px ;text-transform: none ;color: #d6d6d6 ;">
                                    <p>Sign up for our <u>monthly newsletter</u> to get the latest news, volunteer opportunities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-newsletter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-style-rectangle" style="padding-bottom: 10px ;">
                                <div class="newsletter newsletter-subscription">
                                    <form class="gdlr-core-newsletter-form clearfix" method="post" action="https://demo.goodlayers.com/chariti/demo3/?na=s" onsubmit="return newsletter_check(this)">
                                        <div class="gdlr-core-newsletter-email">
                                            <input class="newsletter-email gdlr-core-skin-e-background gdlr-core-skin-e-content" placeholder="Your Email Address" type="email" name="ne" size="30" required />
                                        </div>
                                        <div class="gdlr-core-newsletter-submit">
                                            <input class="newsletter-submit" type="submit" value="Subscribe" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection