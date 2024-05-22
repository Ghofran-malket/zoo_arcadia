@extends('layouts.app')

@section('content')

    <!-- Carousel images-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          @for ($i = 0; $i < count($sliders); $i++)
              <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="@if($i == 0 ) active @endif"></li>
          @endfor
              
      </ol>
      <div class="carousel-inner">
          @foreach ($sliders as $slider)
              <div class="carousel-item @if($sliders->first() == $slider ) active @endif">
                  <div class="wrapper">
                      <img class="d-block w-100 image-slider" src="{{Voyager::image($slider->image)}}" alt="{{$slider->page}}">
                      
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


    

    <!-- contact us section-->
    
    <div class="container-fluid padding-vertically-5vh padding-horizontally-10vh">
      <div class="row justify-content-start">
        <div class="irish blue size-45 ">Contact us</div>
      </div>
      <div class="row mt-3">
        <div class="rounded width100heightauto border-raduis-25 background-offwhite padding-vertically3-horizontally4 ">
          <form>
            <div class="form-group row">
              <div class="col-sm-4 col-form-label">
                <label for="inputTitle" class="itim blue size-35">Title: </label>
              </div>
              <div class="col-sm-8">
                <input type="text" class="form-control irish grey888 size-25 border-raduis-25 
                padding-vertically1-horizontally2" id="inputTitle" value="title">
              </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4 col-form-label">
                  <label for="inputEmail" class="itim blue size-35">Email: </label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control irish grey888 size-25 border-raduis-25 
                  padding-vertically1-horizontally2" id="inputEmail" value="email">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4 col-form-label">
                    <label for="inputDescription" class="itim blue size-35">Description: </label>
                </div>
              <div class="col-sm-8">
                <textarea class="form-control irish grey888 size-25 border-raduis-25 
                padding-vertically1-horizontally2" id="inputDescription" placeholder="ecrives votre description..."></textarea>
              </div>
            </div>
            <div class="form-group row justify-content-end">
              <div class="col col-form-label ">
                <button class="float-right rounded background-blue itim white size-30 p-2
                 border-raduis-25 padding-vertically1-horizontally2">envoyer</button>
              </div> 
            </div>
          </form>
        </div>

      </div>
     
  </div>
    
@stop
