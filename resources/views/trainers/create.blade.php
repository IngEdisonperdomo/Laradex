@extends('layouts.app')

@section('title','Trainer Create')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <form action="/trainer" method="post">
        @csrf
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
      </div>
    </div>
  </div>
  
 @endsection() 

