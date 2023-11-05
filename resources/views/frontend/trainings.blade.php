@extends('frontend.layout.master')
@section('title')
    Training - Centre for Climate Justice
@endsection

@section('content')
<br>
<div class="gdlr-core-column-30 ml-5 pl-5">

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
@endsection