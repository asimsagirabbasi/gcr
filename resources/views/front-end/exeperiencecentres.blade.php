@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
                <div class="row">
                    <div class="flt"><h2>SOLUTION CATALOG - {{$category->getName()}}</h2></div>
                    <div class="flt">
                      <h2 class="solutionh2">{{$category->getName()}}</h2>
					  <div class="clearfix"></div>
                        <div class="row">
                            @forelse($videos as $video)
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <iframe width="100%" height="160" src=" {{$video->getMediaUrl()}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									<div class="vidTittle">{{$video->getTitle()}}</div>
                                </div>
                                @empty
                                No Videos Found
                            @endforelse
                        </div>
                    </div>

                </div>








            </div>
        </div>

    </div>
@endsection