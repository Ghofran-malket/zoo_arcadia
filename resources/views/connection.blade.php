@extends('layouts.app')

@section('content')
    <!-- contact us section-->
    <div class="connection-background width100height100">
        <div class="container middle-centre">
    
            <div class="rounded border-raduis-25 width50heightauto background-offwhite padding-vertically4-horizontally6 mx-auto">
              <form action="{{ route('auth.login')}}" method="post" class="vstack garp-3">
                @csrf
                <div class="form-group">
                  <label for="email" class="itim blue size-30">Email: </label>
                  <input type="email" class="form-control irish grey666 size-25 border-raduis-25 padding-vertically1-horizontally2 
                  without-border" id="email" value="{{ old("email")}}">
                  @error('email')
                    {{ $message }}
                  @enderror
                </div>
    
                <div class="form-group">
                  <label for="password" class="itim blue size-30">Password: </label>
                  <input type="password" class="form-control irish grey666 size-25 border-raduis-25 
                  padding-vertically1-horizontally2 without-border" id="password" >

                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
    
                <button class="col-12 rounded background-blue itim white size-40 p-2 border-raduis-25">login</button>
    
                {{-- <div class="form-group">
                    <div class="row mb-5 justify-content-center">
                      <button class="col-12 itim blue size-35 p-2 without-border background-transparent">log out</button>
                    </div> 
                  </div> --}}
              </form>
            </div>
    
        </div>
    </div>
    
     
  </div>
@stop

<style>
  .connection-background {
    height: 100%;
    width:100%;    
    background-image: url("../img/connection.jpg");
    background-position: center;
    background-size: cover;
} 
</style>