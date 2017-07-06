
  @extends('layouts.editbase')

@section('editor')
<form action="{{route("place.update",$task->id)}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
  <div class="container">
    <div class="head">
      <h2>Place Details</h2>
    </div>
    <input type="text" name="name" placeholder="Name" value="{{ old('name', $task->name) }}" required /><br />
    <input type="text" name="location" placeholder="Location" value="{{ old('location', $task->location) }}" required /><br />
    <input type="text" name="open_hours" placeholder="Opening Hours" value="{{ old('open_hours', $task->open_hours) }}" /><br />
    <input type="text" name="climate" placeholder="Climate" value="{{ old('climate', $task->climate) }}" /><br />
    <input  type="text" name="best_season" placeholder="Best Season" value="{{ old('best_season', $task->best_season) }}" /><br />
    <input  type="text" name="gps" placeholder="GPS" value="{{ old('gps', $task->gps) }}" /><br />
    <input type="text" name="bio" placeholder="Short Description" value="{{ old('bio', $task->bio) }}" required ></input><br />
    <input type="text" name="description" placeholder="Description" value="{{ old('description', $task->description) }}" required ></input><br />
    <input type="text" name="things_to_do" placeholder="Things to do" value="{{ old('things_to_do', $task->things_to_do) }}"></input><br />
    <input type="file" name="fileupload" value="fileupload" id="fileupload" multiple>
    <button id="submit" type="submit">
      Send!
    </button>
  </div>
</form>
@endsection