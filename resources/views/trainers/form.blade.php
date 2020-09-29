<div class="form-group">
          <label for="name">nombre</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$trainer->name}}">
          
        </div>
        <div class="form-group">
          <label for="slug">slug</label>
          <input type="text" class="form-control" id="slug" name="slug" value="{{$trainer->slug}}" >
          
        </div>

        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <textarea name="description" id="descripcion" cols="30" rows="10" class="form-control">{{$trainer->description}}</textarea>
          
        </div>
        <div class="form-group">
          <label for="avatar">avatar</label>
          <input type="file" class="form-control" id="avatar" name="avatar">
        </div>