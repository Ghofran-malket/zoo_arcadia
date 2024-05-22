@extends('layouts.app')

@section('content')

    <!-- Carousel images-->
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @for ($i = 0; $i < count($services); $i++)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="@if($i == 0 ) active @endif"></li>
            @endfor
                
        </ol>
        <div class="carousel-inner">
            @foreach ($services as $service)
            <div class="carousel-item @if($service->first() == $service ) active @endif">

                    <div class="wrapper">
                        <img class="d-block w-100 image-slider" src="{{Voyager::image($service->image)}}" alt="">
                        
                    </div>
                </div>
            @endforeach
        
        
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Services -->
    @foreach ($services as $service)
        <div class="container-fluid">
            <div class="row m-auto padding-horizontally-5vh padding-vertically-5vh">
                <div class="rounded mx-auto d-block width100heightauto  border-raduis-25 background-offwhite padding-vertically3-horizontally4">
                    <div class="irish blue size-45 mb-2">
                        {{ $service->name }}
                    </div>
                    <div class="itim grey555 size-25">{{ $service->description }}</div>
                </div>
            </div>
        </div>
    @endforeach

@stop
