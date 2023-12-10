@extends('frontend.layout.master')
@section('title')
    Announcement detials - Centre for Climate Justice
@endsection

@section('content')
<br><br>
<div class="gdlr-core-column-30 offset-3 ml-5 pl-5">



    <div class="gdlr-core-event-item-list gdlr-core-item-pdlr  gdlr-core-style-widget  gdlr-core-with-border clearfix">
        <div class="gdlr-core-event-widget clearfix">
            <div class="gdlr-core-event-item-info-wrap"><span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-time"><span class="gdlr-core-head" ><i class="icon_clock_alt" ></i></span><span class="gdlr-core-tail">{{$announcement->date}}</span></span><span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-location"></span>
            </div>
            <div class="gdlr-core-event-item-content-wrap">
                <img src="{{(!empty($announcement->logo))?URL::to('storage/'.$announcement->logo):URL::to('image/no_image.png')}}" alt="{{$announcement->name}}" style="max-width:400px">
                <h3 class="gdlr-core-event-item-title">{{$announcement->name}}</h3>
             
                <p>{!!$announcement->desc!!}</p>
            </div>
        </div>
    </div>
               

</div>
@endsection