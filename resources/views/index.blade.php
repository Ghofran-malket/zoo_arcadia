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
                        <img class="d-block w-100 image-slider " src="{{Voyager::image($slider->image)}}" alt="{{$slider->page}}">
                        <div class="centered irish white size-50">{{ $slider->description }}</div>
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
    

    <!-- Les habitats section-->
    <div class="container-fluid background-offwhite padding-vertically-5vh padding-horizontally-10vh ">
        <div class="row justify-content-center">
            <div class="itim blue size-50">Les habitats</div>
        </div>
        <div class="row d-flex mt-5 justify-content-between">
            @foreach ($habitats as $habitat)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 text-center mx-auto">
                    <img class="rounded-circle image-size-w22h22" alt="avatar1" src="{{Voyager::image(json_decode($habitat->image, true)[0])}}"/>
                    <div class="p-5 itim black size-30">{{ $habitat->name }}</div>
                </div>
            @endforeach
            
            
        </div>
    </div>

    <!-- Les services section-->
    <div class="container-fluid background-blue padding-vertically-5vh padding-horizontally-10vh">
        <div class="row justify-content-center">
        <div class="itim white size-50">Les service</div>
        </div>
        <div class=" row d-flex mt-5 justify-content-between">
            
        <div class="col-xl-5 col-lg-11 col-md-11 col-sm-12 text-center padding-vertically3-horizontally4">
            <img src="{{Voyager::image($services->image)}}" class="rounded mx-auto d-block object-fit-contain  width100heightauto border-raduis-25" alt="...">
        </div>
        
        <div class="col-xl-6 col-lg-11 col-md-11 col-sm-12 text-start mx-auto ">
            <div class="row itim white size-40">{{ $services->name }}</div>
            
            <div class="row itim white size-30 limit-line-6">
                {{ $services->description }}
            </div>
        </div>
        
        </div>
    </div>

    <!-- Nos animaux section-->

    <div class="container-fluid background-offwhite padding-vertically-5vh padding-horizontally-10vh">
        <div class="row justify-content-center">
        <div class="itim blue size-50">Nos animaux</div>
        </div>
        <div class="row d-flex mt-5 justify-content-around">
            @foreach ($animals as $animal)
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4  text-center mx-auto">
                    <img class="rounded-circle image-size-w22h22" alt="avatar1" src="{{ Voyager::image( $animal->image)}}"/>
                    <div class="p-5 itim black size-30">{{ $animal->first_name }}</div>
                </div>
            @endforeach
        
        </div>
    </div>

    <!-- Les avis section-->

    <div class="container-fluid background-blue padding-vertically-5vh padding-horizontally-10vh">
        <div class="row justify-content-center">
        <div class="itim white size-50">Les avis</div>
        </div>
        <div class=" row d-flex mt-5 mx-1 my-1 justify-content-between">
            @foreach ($avis_de_visiteurs as $avis_de_visiteur)
            <div class="col-xl-6 col-lg-11 col-md-11 col-sm-12 text-start mb-4">
                <div class="rounded mx-auto d-block object-fit-contain width100heightauto background-offwhite border-raduis-25 padding-vertically3-horizontally4">
                    <div class="itim black size-30 mb-2">
                        Jose Almen
                        {{-- <i class="fa fa-star-o size-25 gold"></i>
                        <i class="fa fa-star-o size-25 gold"></i>
                        <i class="fa fa-star-o size-25 gold"></i>
                        <i class="fa fa-star-o size-25 gold"></i>
                        <i class="fa fa-star-o size-25 gold"></i> --}}
                    </div>
                    <div class="itim size-25 grey666 limit-line-6">{{ $avis_de_visiteur->commentaire}}</div>
                </div>
            </div>
            @endforeach
    
        
        
        
        </div>

        <div class="row mt-2 justify-content-end irish offWhite size-35">Plus d'avis...</div>
    </div>

    <!-- Comments section-->

    <div class="container-fluid background-offwhite padding-vertically-5vh padding-horizontally-10vh">
    <div class="row justify-content-start">
        <div class="itim blue size-50 ">Laissez votre commentaire</div>
    </div>
    <div class="row mt-3">
        <div class="rounded width100heightauto border-raduis-25 background-beige padding-vertically3-horizontally4 ">
        <form>
            <div class="form-group row">
            <div class="col-sm-4 col-form-label">
                <label for="inputPseudo" class="itim grey333 size-30">Un pseudo:</label>
                <label class="itim grey888 size-15">Cet avis sera ensuite soumis à validation par l’employé.</label>
            </div>
            <div class="col-sm-8">
                <input type="text" class="form-control itim grey888 size-20 border-raduis-25 padding-vertically1-horizontally2" id="inputPseudo" value="pseudo">
            </div>
            </div>
            <div class="form-group row">
            <label for="inputCommentaire" class="col-sm-4 col-form-label itim grey333 size-30">Commentaire</label>
            <div class="col-sm-8">
                <textarea class="form-control itim grey888 size-20 border-raduis-25 padding-vertically1-horizontally2" id="inputCommentaire" placeholder="ecrives votre commentaire..."></textarea>
            </div>
            </div>
            <div class="form-group row justify-content-end">
            <div class="col col-form-label ">
                <button class="float-right rounded background-blue itim white size-30 p-2 border-raduis-25 padding-vertically1-horizontally2">Submit</button>
            </div> 
            </div>
        </form>
        </div>

    </div>
    
    </div>

@stop