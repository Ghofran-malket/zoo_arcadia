@extends('layouts.app')

@section('content')
<div class="connection-background width100height100">
    <div class="container middle-centre">
        <div class="rounded border-raduis-25 width50heightauto background-offwhite padding-vertically4-horizontally6 mx-auto">

        <form action="{{ route('auth.register')}}" method="post" class="vstack garp-3">

            @csrf
            <div class="form-group">
                <label for="name" class="itim blue size-30">User Name:</label>
                <input type="text" class="form-control irish grey666 size-25 border-raduis-25 padding-vertically1-horizontally2 
                without-border" id="name" name="name">
                @error('name')
                    {{ $message }}
                @enderror
            </div>

            <div class="form-group">
                <label for="email" class="itim blue size-30">Email</label>
                <input type="email" class="form-control irish grey666 size-25 border-raduis-25 padding-vertically1-horizontally2 
                without-border" id="email" name="email" value="{{ old("email")}}">
                @error('email')
                    {{ $message }}
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="itim blue size-30">Mot de passe</label>
                <input type="password" class="form-control irish grey666 size-25 border-raduis-25 
                padding-vertically1-horizontally2 without-border" id="password" name="password">
                @error('password')
                    {{ $message }}
                @enderror
            </div>

            <div class="form-group">
                <input type="radio" id="employe" name="type" value="employe">
                <label for="employe" class="itim blue size-20">employe</label>
                </br>
                <input type="radio" id="veterinaire" name="type" value="veterinaire">
                <label for="veterinaire" class="itim blue size-20">veterinaire</label>
                @error('type')
                    {{ $message }}
                @enderror
            </div>

            <button class="btn btn-primary col-12 rounded background-blue itim white size-40 p-2 border-raduis-25">Se connetcer </button>
        </form>

        </div>
    </div>
</div>
@endsection

<style>
    .connection-background {
      height: 100%;
      width:100%;    
      background-image: url("../img/connection.jpg");
      background-position: center;
      background-size: cover;
  } 
  </style>