@extends('layouts.app')

@section('content')

<!-- Carousel images-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @for ($i = 0; $i < count(json_decode($habitat->image)); $i++)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="@if($i == 0 ) active @endif"></li>
      @endfor
    </ol>
    <div class="carousel-inner">
      @foreach(json_decode($habitat->image, true) as $image)
      
            <div class="carousel-item @if(json_decode($habitat->image, true)[0] == $image) active @endif">
                <div class="wrapper">
                    <img class="d-block w-100 image-slider" src="{{Voyager::image($image)}}" alt="first slide">
                    
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

  <!-- Les habitats detail section-->

  <div class="container-fluid background-offwhite padding-vertically-5vh padding-horizontally-10vh">
    <div class="row justify-content-center">
      <div class="itim blue size-50"> {{ $habitat->name }} </div>
    </div>
    <div class="row d-flex mt-5 justify-content-between itim grey777 size-20">
      {{ $habitat->description }}
    </div>

  </div>

  <!-- Nos animaux section-->

  <div class="container-fluid background-offwhite padding-vertically-5vh padding-horizontally-10vh">
    <div class="row mt-5 justify-content-center">
      <div class="itim blue size-50">les animaux de cette habitats</div>
    </div>
    <div class="row d-flex mt-5 justify-content-between">
      @foreach ($animals as $animal)
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 text-center mx-auto">
          <a href="{{route('animal.details', [$habitat->id, $animal->id])}}">
            <img class="rounded-circle image-size-w22h22" alt="avatar1" src= "{{Voyager::image($animal->image)}}" />
            <div class="p-5 itim black size-30"> {{ $animal->first_name }} </div>
          </a>
        </div>
      @endforeach     
    </div>
  </div>
@stop