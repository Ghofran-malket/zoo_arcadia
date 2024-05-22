<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zoo Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('style/color.css')}}">
  <link rel="stylesheet" href="{{ asset('style/font.css') }}">
  <link rel="stylesheet" href="{{ asset('style/font-style.css') }}">
  <link rel="stylesheet" href="{{ asset('style/style.css')}}">
  
</head>
<body>
    <!-- Main menu-->
    <nav class="navbar navbar-expand-lg navbar-light background-transparent position-absolute-top">
        
      <button class="navbar-toggler background-offwhite" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item px-3">
            <a class="nav-link @if(Route::is('home')) active @endif" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link @if(Route::is('services')) active @endif" href="{{route('services')}}">Services</a>
          </li>

          <li class="nav-item px-3">
              <a class="nav-link @if(Route::is('habitats') || Route::is('habitats.details') || Route::is('animal.details')) active @endif" href="{{route('habitats')}}">Habitats</a>
            </li>
          
          {{-- <li class="nav-item px-3">
              <a class="nav-link @if(Route::is('auth.login')) active @endif" href="{{route('auth.login')}}">Connection</a>
          </li> --}}

          <?php $page=TCG\Voyager\Models\Page::first(); ?>
            @can('browse', $page)
            <li class="nav-item px-3">
              <a class="nav-link @if(Route::is('auth.login')) active @endif" href="{{route('auth.login')}}">Connection</a>
            </li> 
            @endcan
          

          @auth
          
          <?php $user= TCG\Voyager\Models\User::first(); ?>
            @can('add', $user)
              @if (Auth::user())
                <li class="nav-item px-3">
                  <a class="nav-link @if(Route::is('auth.register')) active @endif" href="{{route('auth.register')}}">Create Account</a>
                </li>
                {{-- <form class="nav-item px-3" action = {{ route('auth.logout')}} method="post">
                  @method('delete')
                  @csrf
                  <button class="nav-link">se deconnecter</button>
                </form> --}}
                {{-- <li class="nav-item px-3">
                  <a class="nav-link @if(Route::is('auth.login')) active @endif" href="{{route('auth.login')}}">Connection</a>
                </li> --}}
              @endif
              
            @endcan
          @endauth
          
          
          <li class="nav-item px-3">
              <a class="nav-link @if(Route::is('contacts')) active @endif" href="{{route('contacts')}}">Contacts</a>
            </li>
        </ul>
        
      </div>
  </nav>

  @yield('content')
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
