@extends('frontend.layout.master')
@section('title')
    Publication - Centre for Climate Justice
@endsection

@section('content')
<br><br>
<div class="gdlr-core-column-30 offset-3 ml-5 pl-5">

    @foreach ($publication as $item)

    <div class="gdlr-core-event-item-list gdlr-core-item-pdlr  gdlr-core-style-widget  gdlr-core-with-border clearfix">
        <div class="gdlr-core-event-widget clearfix">
            <div class="gdlr-core-event-item-content-wrap">
                <h3 class="gdlr-core-event-item-title"><a href="{{(!empty($item->file))?URL::to('storage/'.$item->file):URL::to('image/no_image.png')}}" >{{$item->title}}</a></h3>
              
            </div>
        </div>
    </div>
               
    @endforeach
</div>
@endsection