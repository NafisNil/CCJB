@extends('frontend.layout.master')
@section('title')
    Event detials - Centre for Climate Justice
@endsection

@section('content')
<br><br>
<div class="gdlr-core-column-30 offset-3 ml-5 pl-5">



    <div class="gdlr-core-event-item-list gdlr-core-item-pdlr  gdlr-core-style-widget  gdlr-core-with-border clearfix">
        <div class="gdlr-core-event-widget clearfix">
            <div class="gdlr-core-event-item-info-wrap"><span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-time"><span class="gdlr-core-head" ><i class="icon_clock_alt" ></i></span><span class="gdlr-core-tail">{{$event->date}}</span></span><span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-location"><span class="gdlr-core-head" ><i class="icon_pin_alt" ></i></span><span class="gdlr-core-tail">{{$event->place}}</span></span>
            </div>
            <div class="gdlr-core-event-item-content-wrap">
                <img src="{{(!empty($event->logo))?URL::to('storage/'.$event->logo):URL::to('image/no_image.png')}}" alt="{{$event->title}}" style="max-width:400px">
                <h3 class="gdlr-core-event-item-title"><a href="{{(!empty($event->file))?URL::to('storage/'.$event->file):URL::to('image/no_image.png')}}" >{{$event->title}}</a></h3>
             
                <p>{!!$event->description!!}</p>
            </div>
        </div>
    </div>
               

</div>
@endsection