@extends('layouts.app')

@section('title','Trainer')

@section('content')

  <div class="container">
    <div class="row">
      
      
      <div class="col-md-12 text-center">  
        
          <img src="/images/{{ $trainer->avatar }}" alt="" class="card-img-top rounded-circle mx-auto d-block mb-2" style="width:200px; height: 200px; background-color:#efefef;">
          <p>{{ $trainer->name }}</p>
          <p>{{$trainer->description}}</p>
          <a href="/trainer/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
      </div>
      
      
    </div>
  </div>
  
 @endsection() 

