@extends('frontend.layout.master')
@section('title')
    Project Details - Centre for Climate Justice
@endsection

@section('content')
<br><br>
<div class="gdlr-core-column-30 offset-3 ml-5 pl-5">


    <div class="gdlr-core-event-item-list gdlr-core-item-pdlr  gdlr-core-style-widget  gdlr-core-with-border clearfix">
        <div class="gdlr-core-event-widget clearfix">
            <div class="gdlr-core-event-item-content-wrap">
                <img src="{{(!empty($project->logo))?URL::to('storage/'.$project->logo):URL::to('image/no_image.png')}}" alt="{{$project->title}}" style="max-width:400px">
                <h3 class="gdlr-core-event-item-title"><a href="{{(!empty($project->file))?URL::to('storage/'.$item->file):URL::to('image/no_image.png')}}" >{{$project->title}}</a></h3>
                <p>{!!$project->description!!}</p>
            </div>
        </div>
    </div>

</div>
@endsection