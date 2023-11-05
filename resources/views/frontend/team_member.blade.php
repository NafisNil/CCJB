@extends('frontend.layout.master')
@section('title')
    Team Member - Centre for Climate Justice
@endsection

@section('content')
<div class="gdlr-core-pbf-wrapper " style="padding: 92px 0px 50px 0px;">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('frontend')}}/demos/chariti/demo3/upload/hp3-personnel-bg.jpg) ;background-repeat: repeat-x ;background-position: top center ;" data-parallax-speed="0"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-21697">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 0px 50px 0px;">
                    <div class="gdlr-core-pbf-background-wrap">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('frontend')}}/demos/chariti/demo3/upload/hp3-title-bg.png) ;background-repeat: no-repeat ;background-position: center ;" data-parallax-speed="0"></div>
                    </div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 14px ;font-weight: 700 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #a3d1be ;">All Volunteers</span>
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 42px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Our Team Members<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-personnel-item-style-grid-with-background gdlr-core-personnel-style-grid gdlr-core-with-background gdlr-core-item-pdlr" style="padding-bottom: 55px ;">
                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="carousel" data-column="3" data-move="1" data-nav="navigation-outer" data-nav-parent="self" data-vcenter-nav="1">
                        <div class="gdlr-core-flexslider-custom-nav  gdlr-core-style-navigation-outer gdlr-core-center-align"><i class="icon-arrow-left flex-prev" style="color: #ffffff ;font-size: 38px ;"></i><i class="icon-arrow-right flex-next" style="color: #ffffff ;font-size: 38px ;"></i></div>
                        <ul class="slides">
                            @foreach ($team as $item)
                            
                            <li class="gdlr-core-item-mglr">
                                <div class="gdlr-core-personnel-list clearfix gdlr-core-outer-frame-element" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.09); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.09); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.09); ">
                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image ">
                                        <a href="#"><img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="{{@$item->name}}" alt="" width="579" height="579" title="personal-9" /></a>
                                        <div class="gdlr-core-hover-opacity"></div>
                                    </div>
                                    <div class="gdlr-core-personnel-list-content-wrap ">
                                        <h3 class="gdlr-core-personnel-list-title" style="font-size: 23px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;margin-bottom: 5px ;"><a href="#" >{{$item->name}}</a></h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 17px ;font-weight: 500 ;font-style: normal ;">{{$item->designation}}</div>
                                        <div class="gdlr-core-personnel-list-social">
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="https://facebook.com/goodlayers" target="_blank" class="gdlr-core-social-network-icon" title="facebook"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin"><i class="fa fa-linkedin" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="pinterest"><i class="fa fa-pinterest-p" ></i></a><a href="https://twitter.com/goodlayers" target="_blank" class="gdlr-core-social-network-icon" title="twitter"><i class="fa fa-twitter" ></i></a></div>
                                        </div>
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