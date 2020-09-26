@extends('layouts.app')

@section('title','Trainer Create')

@section('content')

  <div class="container">
    <div class="row">
      
      @foreach($trainers as $trainer)
      <div class="col-md-4">  
        <div class="card">
          <img src="images/{{ $trainer->avatar }}" alt="" class="card-img-top">
          <div class="card-body">
            <div class="card-title">{{$trainer->name}}</div>
            <p class="card-text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            </p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>
      @endforeach()  
    </div>
  </div>
  
 @endsection() 

