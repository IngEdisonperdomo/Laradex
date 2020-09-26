@extends('layouts.app')

@section('title','Trainer Create')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <form action="/trainer" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">nombre</label>
          <input type="text" class="form-control" id="name" name="name">
          
        </div>

        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
          
        </div>
        <div class="form-group">
          <label for="avatar">avatar</label>
          <input type="file" class="form-control" id="avatar" name="avatar">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
      </div>
    </div>
  </div>
  
 @endsection() 

