
  @extends('layouts.editbase')

@section('editor')
<form action="/" method="POST">
{{csrf_field()}}
  <div class="container">
    <div class="head">
      <h2>Heritages</h2>
    </div>
    <input type="text" name="name" placeholder="Name" required /><br />
    <input type="text" name="location" placeholder="Location" required /><br />
    <input type="text" name="open_hours" placeholder="Opening Hours" /><br />
    <input type="text" name="climate" placeholder="Climate" /><br />
    <input  type="text" name="best_season" placeholder="Best Season" /><br />
    <input  type="text" name="gps" placeholder="GPS" /><br />
    <textarea type="text" name="bio" placeholder="Short Description" required ></textarea><br />
    <textarea type="text" name="description" placeholder="Description" required ></textarea><br />
    <textarea type="text" name="things_to_do" placeholder="Things to do"></textarea><br />
    <input type="file" name="fileupload" value="fileupload" id="fileupload" multiple>
    <button id="submit" type="submit">
      Send!
    </button>
  </div>
</form>
@endsection