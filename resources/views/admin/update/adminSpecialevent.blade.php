
  @extends('layouts.editbase')

@section('editor')

<form action="{{route("event.update",$task->id)}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
  <div class="container">
    <div class="head">
      <h2>Event</h2>
    </div>
    <input type="text" name="name" placeholder="Name" value="{{ old('name', $task->name) }}" required /><br />
    <input type="text" name="location" placeholder="Location" value="{{ old('location', $task->location) }}" required /><br />
    <input  type="text" name="time" placeholder="Time of celebration" value="{{ old('time', $task->time) }}" required /><br />
    <input  type="text" name="days" placeholder="Days of celebration" value="{{ old('days', $task->days) }}" /><br />
   <input  type="text" name="entry" placeholder="Entry Description" value="{{ old('entry', $task->entry) }}" /><br />
    <input type="text" name="description" placeholder="Description" value="{{ old('description', $task->description) }}" required ></input><br />
     <input type="file" name="fileupload" value="fileupload" id="fileupload" multiple>   
    <button id="submit" type="submit">
      Send!
    </button>
  </div>
</form>
@endsection