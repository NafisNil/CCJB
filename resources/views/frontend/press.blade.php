@extends('frontend.layout.master')
@section('title')
    Press release - Centre for Climate Justice
@endsection

@section('content')

<div class="gdlr-core-pbf-wrapper " style="padding: 115px 0px 90px 0px;">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('frontend')}}/demos/chariti/demo3/upload/hp3-blog-bg.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">

            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column-with-frame gdlr-core-item-pdlr" style="padding-bottom: 55px ;">
                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="carousel" data-column="3" data-move="1" data-nav="navigation-outer" data-nav-parent="self" data-vcenter-nav="1">
                        <div class="gdlr-core-flexslider-custom-nav  gdlr-core-style-navigation-outer gdlr-core-center-align"><i class="icon-arrow-left flex-prev" style="color: #ffffff ;font-size: 38px ;"></i><i class="icon-arrow-right flex-next" style="color: #ffffff ;font-size: 38px ;"></i></div>
                        <ul class="slides">

                            @foreach ($press as $item)
                            <li class="gdlr-core-item-mglr">
                                <div class="gdlr-core-blog-grid gdlr-core-style-2 gdlr-core-js  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background " data-sync-height="blog-item-1">
                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                        <a href="{{$item->link}}"><img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="" width="700" height="450" title="jordane-mathieu-nnJtKp37UOE-unsplash" /></a>
                                    </div>
                                    <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position" style="padding-top: 30px;padding-bottom: 20px;padding-left: 40px;">
                           
                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 22px ;font-weight: 700 ;"><a href="{{(!empty($item->pdf))?URL::to('storage/'.$item->pdf):URL::to('image/no_image.png')}}" >{{$item->title}}</a></h3>
                                        <div class="gdlr-core-blog-content clearfix"></div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                 
 
                        </ul>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>
@endsection