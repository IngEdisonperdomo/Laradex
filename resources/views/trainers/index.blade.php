@extends('layouts.app')

@section('title','Trainer Create')

@section('content')

  <div class="container">
    <div class="row">
      
      @foreach($trainers as $trainer)
      <div class="col-md-4">  
        <div class="card text-center">
          <img src="/images/{{ $trainer->avatar }}" alt="" class="card-img-top rounded-circle mx-auto d-block mb-2" style="width:100px; height: 100px; background-color:#efefef;">
          <div class="card-body">
            <div class="card-title">{{$trainer->name}}</div>
            <p class="card-text">
              {{$trainer->description}}
            </p>
            <a href="/trainer/{{$trainer->slug}}" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>
      @endforeach()  
    </div>
  </div>
  
 @endsection() 

