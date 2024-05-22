@extends('layouts.app')

@section('content')

    <!-- Carousel images-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="wrapper">
                <img class="d-block w-100 image-slider" src="{{Voyager::image($animal->image)}}" alt="First slide">
                
            </div>
          </div>
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
    <div class="container-fluid padding-horizontally-10vh padding-vertically-10vh">
        <div
            class="rounded d-block width100heightauto  border-raduis-25 background-offwhite padding-vertically-5vh padding-horizontally-5vh">
            <div class="row">
                <div class="col-10">
                    <div class="row d-flex">
    
                        <div class="col itim blue size-30">le prenom:<span
                                class="itim black size-30 text-indent10">{{$animal->first_name}}</span> </div>
                        <div class="col itim blue size-30">la race: <span
                                class="itim black size-30 text-indent10">{{ $animal->race}}</span> </div>
                        <div class="col itim blue size-30">l'habitats: <span
                                class="itim black size-30 text-indent10">{{ $habitat->name}}</span> </div>
    
                             
    
    
                    </div>
                    <div class="row itim blue size-30">l’avis du vétérinaire: </div>
                    <div class="row itim blue size-30">L'état de l’animal: <span
                            class="itim black size-30 text-indent10">{{ $avis_de_veterinaire->etats }}</span></div>
    
                    <div class="row itim blue size-30">La nourriture proposée: <span
                            class="itim black size-30 text-indent10">{{ $avis_de_veterinaire->nourriture }}</span></div>
    
    
                    <div class="row itim blue size-30">Le grammage de la nourriture: <span
                            class="itim black size-30 text-indent10">{{ $avis_de_veterinaire->grammage }}</span></div>
    
                    <div class="row itim blue size-30">Date de passage: <span
                            class="itim black size-30 text-indent10">{{ $avis_de_veterinaire->date_de_passage }}</span></div>
    
                    <div class="row itim blue size-30">Détail de l’état de l’animal:<span class=" itim black size-30">
                      {{ $avis_de_veterinaire->details_de_son_etat }}
                    </span>
                    </div>
                </div>
                <div class="col">
                    <div class="row d-flex justify-content-end">
                        <img class="rounded-circle image-size-w22h22" alt="avatar1" src="{{Voyager::image($animal->image)}}"/>
                    </div>
                    
                </div>
            </div>


        </div>

    </div>


@stop