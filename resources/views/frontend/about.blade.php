@extends('frontend.layout.master')
@section('title')
    About - Centre for Climate Justice
@endsection

@section('content')
<div class="gdlr-core-pbf-wrapper " style="padding: 30px 0px 90px 0px;" id="gdlr-core-wrapper-4">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('frontend')}}/demos/chariti/demo3/upload/hp3-about-2-bg.png) ;background-repeat: no-repeat ;background-position: top center ;" data-parallax-speed="0.1"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-54986">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 0px 0px 10px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 14px ;font-weight: 700 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #a9a9a9 ;margin-bottom: 5px ;"></span>
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 37px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #3bcf93 ;">About Us<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 13px ;">
                                <div class="gdlr-core-text-box-item-content" style="font-size: 19px ;font-weight: 400 ;text-transform: none ;color: #3e3e3e ;">
                                    <p class="p1"><span class="s1">{!!  $about->description!!}</span></p>
                                </div>
                            </div>
                        </div>
         
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-6991">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 20px 0px 0px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-image-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr">
                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                    <img src="{{(!empty($about->logo))?URL::to('storage/'.$about->logo):URL::to('image/no_image.png')}}">
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