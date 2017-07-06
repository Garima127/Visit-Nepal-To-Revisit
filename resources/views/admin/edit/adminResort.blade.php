
  @extends('layouts.editbase')

@section('editor')
<form action="adminResorts.html" id="contact">
  <div class="container">
    <div class="head">
      <h2>Your Resort</h2>
    </div>
    <input type="text" name="name" placeholder="Name" required /><br />
    <input type="text" name="place" placeholder="Location" required /><br />
    <input type="text" name="contact" placeholder="Contact" required /><br />
    <input  type="email" name="email" placeholder="Email" required /><br />
    <input  type="text" name="email" placeholder="Expenses" required /><br />
    <input  type="text" name="website" placeholder="Website" /><br />
    <textarea type="text" name="description" placeholder="Description" required ></textarea><br />
    <textarea type="text" name="facilities" placeholder="Facilities"></textarea><br />
    <input type="file" name="fileupload" value="fileupload" id="fileupload" multiple>
    <button id="submit" type="submit">
      Send!
    </button>
  </div>
</form>
@endsection