@extends('frontend.layout.master')
@section('title')
    FAQ - Centre for Climate Justice
@endsection

@section('content')
<br><br>
<div class="gdlr-core-column-30 offset-3 ml-5 pl-5">

    @foreach ($faq as $item)

    <div class="gdlr-core-event-item-list gdlr-core-item-pdlr  gdlr-core-style-widget  gdlr-core-with-border clearfix">
        <div class="gdlr-core-event-widget clearfix">
            <div class="gdlr-core-event-item-content-wrap">
                <h3 class="gdlr-core-event-item-title"><a href="#" >{!!$item->question!!}</a></h3>
                <p>{!!$item->answer!!}</p>
            </div>
        </div>
    </div>
               
    @endforeach
</div>
@endsection