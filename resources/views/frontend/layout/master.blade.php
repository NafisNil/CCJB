<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
	<link rel="canonical" href="https://max-themes.net/demos/chariti/demo3/index.html" />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/the-events-calendar/common/src/resources/css/common-skeleton.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/the-events-calendar/common/src/resources/css/tooltip.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/goodlayers-core/plugins/fontawesome/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/goodlayers-core/plugins/fa5/fa5.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/goodlayers-core/plugins/elegant/elegant-font.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/goodlayers-core/plugins/simpleline/simpleline.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/goodlayers-core/plugins/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/revslider/public/assets/css/rs6.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/fundraisemaster/fundraisemaster.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/css/fundraisemaster-style-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('frontend')}}/demos/chariti/demo3/css/chariti-style-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Cdevanagari%2Clatin%2Cvietnamese%2Ccyrillic%2Ccyrillic-ext&amp;display=optional&amp;ver=5.4' type='text/css' media='all' />   
    <link href="//fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">


<style>
    @media screen and (min-width: 480px) {
	 .chariti-logo {
		margin-left: 40%
	}
  }
</style>


</head>
<body class="home page-template-default page page-id-7776 theme-chariti gdlr-core-body frmaster-body woocommerce-no-js tribe-no-js page-template-home-goodlayers-public_html-demo-chariti-wp-content-themes-chariti-page-php chariti-body chariti-body-front chariti-full  chariti-with-sticky-navigation  chariti-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url="#">
    <div class="chariti-mobile-header-wrap">
        <div class="chariti-mobile-header chariti-header-background chariti-style-slide chariti-sticky-mobile-navigation " id="chariti-mobile-header">
            <div class="chariti-mobile-header-container chariti-container clearfix">
                <div class="chariti-logo  chariti-item-pdlr">
                    <div class="chariti-logo-inner">
                        <a class="chariti-fixed-nav-logo" href="{{route('index')}}"><img src="{{(!empty($general->logo))?URL::to('storage/'.$general->logo):URL::to('image/no_image.png')}}" alt="" width="301" height="65" title="mobile-logo-demo-2" /></a>
                        <a class=" chariti-orig-logo" href="{{route('index')}}"><img src="{{(!empty($general->logo))?URL::to('storage/'.$general->logo):URL::to('image/no_image.png')}}" alt="" width="301" height="65" title="mobile-logo-demo-2" /></a>
                    </div>
                </div>
                <div class="chariti-mobile-menu-right">
                    
                    <div class="chariti-top-search-wrap">
                        <div class="chariti-top-search-close"></div>
                        <div class="chariti-top-search-row">
                            <div class="chariti-top-search-cell">
                              
                            </div>
                        </div>
                    </div>
                    <div class="chariti-main-menu-cart" id="chariti-mobile-menu-cart"><i class="fa fa-shopping-cart" data-chariti-lb="top-bar"></i><span class="chariti-top-cart-count">0</span>
                        <div class="chariti-lightbox-content-wrap chariti-top-cart-content-wrap" data-chariti-lb-id="top-bar"><i class="icon_close chariti-lightbox-close"></i>
                            <div class="chariti-top-cart-title">You have <span class="chariti-highlight">0 items</span> in your cart</div>
                            <div class="chariti-top-cart-item-wrap">
                                <div class="chariti-top-cart-item-divider"></div>
                                <div class="chariti-top-cart-button-wrap chariti-center-align"><a class="chariti-top-cart-button-2 chariti-button" href="#">Go To Shopping</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="chariti-mobile-menu"><a class="chariti-mm-menu-button chariti-mobile-menu-button chariti-mobile-button-hamburger" href="#chariti-mobile-menu"><span></span></a>
                        <div class="chariti-mm-menu-wrap chariti-navigation-font" id="chariti-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li class="menu-item menu-item-home current-menu-item current_page_item"><a href="{{route('index')}}" aria-current="page">Home</a></li>
                                <li class="menu-item menu-item-has-children"><a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{route('about.us')}}">About Our Organization</a></li>
                                        <li class="menu-item"><a href="#">About Team</a>
                                            <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="{{route('team.member.us')}}">Team Member</a></li>
                                            <li class="menu-item" data-size="60"><a href="{{route('executive.member.us')}}">Executive Member</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="{{route('projects.us')}}">Projects</a>
                                   
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">Events</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item" data-size="60"><a href="{{route('workshop.us')}}">Workshop</a></li>
                                        <li class="menu-item" data-size="60"><a href="{{route('trainings.us')}}">Training</a></li>
                                        <li class="menu-item" data-size="60"><a href="{{route('seminar.us')}}">Seminar</a></li>
                                        <li class="menu-item" data-size="60"><a href="{{route('conference.us')}}">Confenrece</a></li>
                                        <li class="menu-item" data-size="60"><a href="{{route('others.us')}}">Others</a></li>
                   
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children chariti-normal-menu"><a href="#" class="sf-with-ul-pre">Activities</a>
                                    <ul class="sub-menu">
                                        @foreach ($wedo as $item)
                                        <li class="menu-item" data-size="60"><a href="#">{{$item->title}}</a></li>
                                        @endforeach
                                       
                           
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children"><a href="#">Publications</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{route('policy.us')}}">Policy Brief</a></li>
                                        <li class="menu-item"><a href="{{route('training.us')}}">Training</a></li>
                                        <li class="menu-item"><a href="{{asset('frontend')}}/demos/chariti/demo3/about-team.html">Publication</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children"><a href="#">Reports</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{route('report.us')}}">Reports</a></li>
                                        <li class="menu-item"><a href="{{route('article.us')}}">Article</a></li>
                                        <li class="menu-item"><a href="{{route('trainingman.us')}}">Training Manual</a></li>
                                        <li class="menu-item"><a href="{{route('handbook.us')}}">Handbook</a></li>
                                        <li class="menu-item"><a href="{{route('book.us')}}">Book</a></li>
                                        <li class="menu-item"><a href="{{route('bookchapter.us')}}">Book Chapters</a></li>
                                        <li class="menu-item"><a href="{{route('press.us')}}">Press Release</a></li>
                                        <li class="menu-item"><a href="{{route('other.us')}}">Other</a></li>
                                    </ul>
                                </li>
                     
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="chariti-body-outer-wrapper ">
        <div class="chariti-body-wrapper clearfix ">
            <div class="chariti-header-background-transparent">
                <div class="chariti-top-bar">
                    <div class="chariti-top-bar-background"></div>
                    <div class="chariti-top-bar-container chariti-container ">
                        <div class="chariti-top-bar-container-inner clearfix">
                            <div class="chariti-top-bar-left chariti-item-pdlr">
                                <div class="chariti-top-bar-right-social"><a href="{{$social->facebook}}" target="_blank" class="chariti-top-bar-social-icon" title="facebook"><i class="fa fa-facebook" ></i></a><a href="{{$social->linkedin}}" target="_blank" class="chariti-top-bar-social-icon" title="linkedin"><i class="fa fa-linkedin" ></i></a><a href="{{$social->pinterest}}" target="_blank" class="chariti-top-bar-social-icon" title="pinterest"><i class="fa fa-pinterest-p" ></i></a><a href="{{$social->twitter}}" target="_blank" class="chariti-top-bar-social-icon" title="twitter"><i class="fa fa-twitter" ></i></a><a href="{{$social->instagram}}" target="_blank" class="chariti-top-bar-social-icon" title="instagram"><i class="fa fa-instagram" ></i></a></div>
                                <div class="chariti-top-bar-left-text"><i class="fa fa-phone" style="font-size: 16px ;color: #ffffff ;margin-right: 10px ;"></i>{{$general->phone}}</div>
                            </div>
                            <div class="chariti-top-bar-right chariti-item-pdlr">
                                <div class="chariti-top-bar-right-text"><a href="{{route('faq.all')}}" style="margin-right: 20px;">FAQ</a>|<a href="{{route('index')}}" style="margin-right: 20px; margin-left:20px">What We Do</a>|<a href="{{asset('frontend')}}/demos/chariti/demo3/become-a-volunteer.html" style="margin-right: 20px; margin-left:20px">Join Us</a>|<a href="{{asset('frontend')}}/demos/chariti/demo3/contact.html" style="margin-left:20px">Contact Us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <header class="chariti-header-wrap chariti-header-style-bar chariti-style-2  chariti-style-left">
                    <div class="chariti-header-background"></div>
                    <div class="chariti-header-container clearfix  chariti-container">
                        <div class="chariti-header-container-inner">
                            <div class="chariti-logo  chariti-item-pdlr">
                                <div class="chariti-logo-inner">
                                    <a class="chariti-fixed-nav-logo" href="{{route('index')}}"><img src="{{(!empty($general->logo))?URL::to('storage/'.$general->logo):URL::to('image/no_image.png')}}" alt="" width="301" height="65" title="mobile-logo-demo-2" /></a>
                                    <a class=" chariti-orig-logo" href="{{route('index')}}"><img src="{{(!empty($general->logo))?URL::to('storage/'.$general->logo):URL::to('image/no_image.png')}}" alt="" width="305" height="75" title="logo-demo-3" /></a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="chariti-navigation-bar-wrap chariti-navigation-header-style-bar chariti-style-2  chariti-sticky-navigation chariti-sticky-navigation-height chariti-style-left  chariti-style-fixed">
                        <div class="chariti-navigation-container clearfix  chariti-container">
                            <div class="chariti-navigation-background chariti-item-mglr"></div>
                            <div class="chariti-navigation chariti-item-pdlr clearfix ">
                                <div class="chariti-main-menu" id="chariti-main-menu">
                                    <ul id="menu-main-navigation-1" class="sf-menu">
                                        <li class="menu-item menu-item-home current-menu-item current_page_item  chariti-normal-menu"><a href="{{route('index')}}">Home</a></li>
                                        <li class="menu-item menu-item-has-children chariti-normal-menu"><a href="#" class="sf-with-ul-pre">About Us</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="{{route('about.us')}}">About Our Organization</a></li>
                                                <li class="menu-item" data-size="60"><a href="#">About Team</a>
                                                    <ul class="sub-menu">
                                                        
                                                        <li class="menu-item" data-size="60"><a href="{{route('team.member.us')}}">Team Member</a></li>
                                                        <li class="menu-item" data-size="60"><a href="{{route('executive.member.us')}}">Executive Member</a></li>
                                                       
                                           
                                                    </ul>
                                                </li>
                               
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children chariti-normal-menu"><a href="{{route('projects.us')}}" class="sf-with-ul-pre">Projects</a>
                                         
                                        </li>

                                        <li class="menu-item menu-item-has-children chariti-normal-menu"><a href="{{route('event.us')}}" class="sf-with-ul-pre">Events</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="{{route('workshop.us')}}">Workshop</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{route('trainings.us')}}">Training</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{route('seminar.us')}}">Seminar</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{route('conference.us')}}">Confenrece</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{route('others.us')}}">Others</a></li>
                           
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children chariti-normal-menu"><a href="#" class="sf-with-ul-pre">Activities</a>
                                            <ul class="sub-menu">
                                                @foreach ($wedo as $item)
                                                <li class="menu-item" data-size="60"><a href="#">{{$item->title}}</a></li>
                                                @endforeach
                                               
                                   
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children chariti-normal-menu"><a href="#" class="sf-with-ul-pre">Publications</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="{{route('policy.us')}}">Policy Brief</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{route('training.us')}}">Training</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{route('publication.us')}}">Publication</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item menu-item-has-children chariti-normal-menu"><a href="#" class="sf-with-ul-pre">Reports</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="{{route('report.us')}}">Report</a></li>
                                                <li class="menu-item" data-size="60"><a href="{{route('article.us')}}">Article</a></li>
                                                <li class="menu-item"><a href="{{route('trainingman.us')}}">Training Manual</a></li>
                                                <li class="menu-item"><a href="{{route('handbook.us')}}">Handbook</a></li>
                                                <li class="menu-item"><a href="{{route('book.us')}}">Book</a></li>
                                                <li class="menu-item"><a href="{{route('bookchapter.us')}}">Book Chapters</a></li>
                                                <li class="menu-item"><a href="{{route('press.us')}}">Press Release</a></li>
                                                <li class="menu-item"><a href="{{route('other.us')}}">Other</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="chariti-navigation-slide-bar  chariti-navigation-slide-bar-style-2 chariti-left" data-size-offset="0" data-width="23" id="chariti-navigation-slide-bar"></div>
                                </div>
                                <div class="chariti-main-menu-right-wrap clearfix ">
                                    
                                    <div class="chariti-top-search-wrap">
                                        <div class="chariti-top-search-close"></div>
                                        <div class="chariti-top-search-row">
                                            <div class="chariti-top-search-cell">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- chariti-navigation -->
                        </div>
                        <!-- chariti-header-container -->
                    </div>
                    <!-- chariti-navigation-bar-wrap -->
                </header>
                <!-- header -->
            </div>
            <div class="chariti-page-wrapper" id="chariti-page-wrapper">
                <div class="gdlr-core-page-builder-body " >
                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                        <!-- START Demo 3 REVOLUTION SLIDER 6.1.5 -->
                                        <p class="rs-p-wp-fix"></p>
                                        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                            <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.5">
                                         
                                                <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
                                            </rs-module>
                                        </rs-module-wrap>
                                        <!-- END REVOLUTION SLIDER -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
         @yield('content')
                </div>
            </div>
            <footer>
                <div class="chariti-footer-wrapper ">
                    <div class="chariti-footer-container chariti-container clearfix">
                        <div class="chariti-footer-column chariti-item-pdlr chariti-column-15">
                            <div id="text-1" class="widget widget_text chariti-widget">
                                <div class="textwidget">
                                    <p><img class="alignnone size-full wp-image-7859" src="{{(!empty($general->logo))?URL::to('storage/'.$general->logo):URL::to('image/no_image.png')}}" alt="" width="92" />
                                       
                                    <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="{{$social->facebook}}" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 20px ;color: #ffffff ;" rel="noopener noreferrer"><i class="fa fa-facebook" ></i></a><a href="{{$social->linkedin}}" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 20px ;color: #ffffff ;" rel="noopener noreferrer"><i class="fa fa-linkedin" ></i></a><a href="{{$social->twitter}}" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 20px ;color: #ffffff ;" rel="noopener noreferrer"><i class="fa fa-twitter" ></i></a><a href="{{$social->instagram}}" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="font-size: 20px ;color: #ffffff ;" rel="noopener noreferrer"><i class="fa fa-instagram" ></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="chariti-footer-column chariti-item-pdlr chariti-column-15">
                            <div id="text-10" class="widget widget_text chariti-widget">
                                <h3 class="chariti-widget-title">Contact Info</h3><span class="clear"></span>
                                <div class="textwidget">
                                    <p>Box 3233
                                        <br /> 1810 Kings Way
                                        <br /> King Street, 5th Avenue, New York
                                        <br />
                                        <span class="gdlr-core-space-shortcode" style="margin-top: 0px ;"></span>
                                        <br />
                                        <i class="icon-phone" style="font-size: 15px ;color: #3BCF93 ;margin-right: 10px ;"></i><span style="color: #ffffff;"><strong>New York</strong> : {{$general->phone}}
                                        <br />
                                        <span class="gdlr-core-space-shortcode" style="margin-top: -15px ;"></span>
                                        <br />
                                    
                                        <br />
                                        <span class="gdlr-core-space-shortcode" style="margin-top: -15px ;"></span>
                                        <br />
                                        <i class="icon-envelope-open" style="font-size: 15px ;color: #3BCF93 ;margin-right: 10px ;"></i><a style="color: #ffffff;" href="#"><span class="__cf_email__" >{{$general->email}}</span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="chariti-footer-column chariti-item-pdlr chariti-column-15">
                            <div id="nav_menu-2" class="widget widget_nav_menu chariti-widget">
                                <h3 class="chariti-widget-title">Quick Links</h3><span class="clear"></span>
                                <div class="menu-quick-links-container">
                                    <ul id="menu-quick-links" class="menu">
                                        <li class="menu-item"><a href="{{route('about.us')}}">About Our Organization</a></li>
                                        <li class="menu-item"><a href="#">Join Us</a></li>
                                        <li class="menu-item"><a href="#">Case Studies</a></li>
                                        <li class="menu-item"><a href="#">Sponsors</a></li>
                                        <li class="menu-item"><a href="{{route('faq.all')}}">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                  
                    </div>
                </div>
                <div class="chariti-copyright-wrapper">
                    <div class="chariti-copyright-container chariti-container clearfix">
                        <div class="chariti-copyright-left chariti-item-pdlr"><a href="#" style="margin-right: 10px;">Privacy Policy</a>|<a href="#" style="margin-right: 10px; margin-left:10px">Terms Of Use</a></div>
                        <div class="chariti-copyright-right chariti-item-pdlr">Copyright 2023 CCJ-B, All Right Reserved</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script type='text/javascript' src='{{asset('frontend')}}/demos/chariti/demo3/js/jquery.js'></script>
    <script type='text/javascript' src='{{asset('frontend')}}/demos/chariti/demo3/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/revslider/public/assets/js/revolution.tools.min.js'></script>
    <script type='text/javascript' src='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/revslider/public/assets/js/rs6.min.js'></script>
    <script type='text/javascript' src='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/goodlayers-core/plugins/script.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            },
            "ajax_url": "https:\/\/demo.goodlayers.com\/chariti\/demo1\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/goodlayers-core/include/js/page-builder.js'></script>
    <script type='text/javascript' src='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/fundraisemaster/fundraisemaster.js'></script>
    <script type='text/javascript' src='{{asset('frontend')}}/demos/chariti/demo3/js/ui/effect.min.js'></script>
    <script type='text/javascript' src='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/jquery.mmenu.js'></script>
    <script type='text/javascript' src='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/jquery.superfish.js'></script>
    <script type='text/javascript' src='{{asset('frontend')}}/demos/chariti/demo3/js/plugins/script-core.js'></script>
    <!-- Revolution Slider -->
    <script type="text/javascript">
        function setREVStartSize(t) {
            try {
                var h, e = document.getElementById(t.c).parentNode.offsetWidth;
                if (e = 0 === e || isNaN(e) ? window.innerWidth : e, t.tabw = void 0 === t.tabw ? 0 : parseInt(t.tabw), t.thumbw = void 0 === t.thumbw ? 0 : parseInt(t.thumbw), t.tabh = void 0 === t.tabh ? 0 : parseInt(t.tabh), t.thumbh = void 0 === t.thumbh ? 0 : parseInt(t.thumbh), t.tabhide = void 0 === t.tabhide ? 0 : parseInt(t.tabhide), t.thumbhide = void 0 === t.thumbhide ? 0 : parseInt(t.thumbhide), t.mh = void 0 === t.mh || "" == t.mh || "auto" === t.mh ? 0 : parseInt(t.mh, 0), "fullscreen" === t.layout || "fullscreen" === t.l) h = Math.max(t.mh, window.innerHeight);
                else {
                    for (var i in t.gw = Array.isArray(t.gw) ? t.gw : [t.gw], t.rl) void 0 !== t.gw[i] && 0 !== t.gw[i] || (t.gw[i] = t.gw[i - 1]);
                    for (var i in t.gh = void 0 === t.el || "" === t.el || Array.isArray(t.el) && 0 == t.el.length ? t.gh : t.el, t.gh = Array.isArray(t.gh) ? t.gh : [t.gh], t.rl) void 0 !== t.gh[i] && 0 !== t.gh[i] || (t.gh[i] = t.gh[i - 1]);
                    var r, a = new Array(t.rl.length),
                        n = 0;
                    for (var i in t.tabw = t.tabhide >= e ? 0 : t.tabw, t.thumbw = t.thumbhide >= e ? 0 : t.thumbw, t.tabh = t.tabhide >= e ? 0 : t.tabh, t.thumbh = t.thumbhide >= e ? 0 : t.thumbh, t.rl) a[i] = t.rl[i] < window.innerWidth ? 0 : t.rl[i];
                    for (var i in r = a[0], a) r > a[i] && 0 < a[i] && (r = a[i], n = i);
                    var d = e > t.gw[n] + t.tabw + t.thumbw ? 1 : (e - (t.tabw + t.thumbw)) / t.gw[n];
                    h = t.gh[n] * d + (t.tabh + t.thumbh)
                }
                void 0 === window.rs_init_css && (window.rs_init_css = document.head.appendChild(document.createElement("style"))), document.getElementById(t.c).height = h, window.rs_init_css.innerHTML += "#" + t.c + "_wrapper { height: " + h + "px }"
            } catch (t) {
                console.log("Failure at Presize of Slider:" + t)
            }
        };
    </script>
    <script>
        (function(body) {
            'use strict';
            body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
        })(document.body);
    </script>
    <script type="text/javascript">
        setREVStartSize({
            c: 'rev_slider_1_1',
            rl: [1240, 1024, 1024, 480],
            el: [995, 688, 688, 500],
            gw: [1320, 1024, 1024, 480],
            gh: [995, 688, 688, 500],
            layout: 'fullwidth',
            mh: "0"
        });
        var revapi1,
            tpj;
        jQuery(function() {
            tpj = jQuery;
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    jsFileLocation: "js/plugins/revslider/public/assets/js/",
                    sliderLayout: "fullwidth",
                    visibilityLevels: "1240,1024,1024,480",
                    gridwidth: "1320,1024,1024,480",
                    gridheight: "995,688,688,500",
                    minHeight: "",
                    editorheight: "995,688,630,500",
                    responsiveLevels: "1240,1024,1024,480",
                    disableProgressBar: "on",
                    navigation: {
                        onHoverStop: false,
                        bullets: {
                            enable: true,
                            tmp: "<span class=\"tp-bullet-inner\"></span>",
                            style: "uranus",
                            v_offset: 40,
                            space: 7
                        }
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });
            }
        });
    </script>
    <script>
        var htmlDivCss = unescape(".jost-font%7B%20font-family%3A%20%27Jost%27%20%21important%3B%20%7D");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        var htmlDivCss = unescape("%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C255%2C255%2C0%29%3B%0A%20%20-webkit-transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20background%3Atransparent%3B%0A%20%20width%3A15px%3B%0A%20%20height%3A15px%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet.selected%2C%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C255%2C255%2C1%29%3B%0A%20%20border%3Anone%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background%3Atransparent%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20background-color%200.3s%20ease%2C%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20background-color%200.3s%20ease%2C%20transform%200.3s%20ease%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20outline%3A%20none%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgba%28255%2C255%2C255%2C0%29%3B%0A%20%20background-color%3A%20rgba%28255%2C255%2C255%2C0.3%29%3B%0A%20%20text-indent%3A%20-999em%3B%0A%20%20cursor%3A%20pointer%3B%0A%20%20position%3A%20absolute%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%20transform%3A%20scale%280.4%29%3B%0A%20-webkit-transform%3A%20scale%280.4%29%3B%0A%20background-color%3Argba%28255%2C255%2C255%2C1%29%3B%0A%7D%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        var htmlDivCss = unescape("%0A%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
</body>
</html>