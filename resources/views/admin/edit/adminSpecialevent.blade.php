
  @extends('layouts.editbase')

@section('editor')

<form action="/event" method="POST">
{{csrf_field()}}
  <div class="container">
    <div class="head">
      <h2>Event</h2>
    </div>
    <input type="text" name="name" placeholder="Name" required /><br />
    <input type="text" name="location" placeholder="Location" required /><br />
    <input  type="text" name="time" placeholder="Time of celebration" required /><br />
    <input  type="text" name="days" placeholder="Days of celebration" /><br />
   <input  type="text" name="entry" placeholder="Entry Description" /><br />
    <textarea type="text" name="description" placeholder="Description" required ></textarea><br />
     <input type="file" name="fileupload" value="fileupload" id="fileupload" multiple>   
    <button id="submit" type="submit">
      Send!
    </button>
  </div>
</form>
@endsection