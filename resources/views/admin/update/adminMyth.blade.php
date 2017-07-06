
  @extends('layouts.editbase')

@section('editor')
<form action="{{route("myth.update",$task->id)}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
  <div class="container">
    <div class="head">
      <h2>Myth</h2>
    </div>
    <input type="text" name="name" placeholder="Name" value="{{ old('name', $task->name) }}" required /><br />
    <input type="text" name="history" placeholder="History" value="{{ old('history', $task->history) }}" /><br />
    <input type="text" name="place" placeholder="Place" value="{{ old('place', $task->place) }}" /><br />
    <input type="text" name="community" placeholder="Community" value="{{ old('community', $task->community) }}" /><br />
    <input type="text" name="description" placeholder="Description" value="{{ old('description', $task->description) }}" required ></input><br />
       <input type="file" name="fileupload" value="fileupload" id="fileupload" multiple> 
    <button id="submit" type="submit">
      Send!
    </button>
  </div>
</form>
@endsection