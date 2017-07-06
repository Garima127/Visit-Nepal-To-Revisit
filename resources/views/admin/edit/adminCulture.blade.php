
  @extends('layouts.editbase')

@section('editor')
<form action="/culture" method="POST">
{{csrf_field()}}
  <div class="container">
    <div class="head">
      <h2>Culture</h2>
    </div>
    <input type="text" name="name" placeholder="Name" required /><br />
    <input  type="text" name="place" placeholder="Place" required /><br />
    <input type="text" name="history" placeholder="History" required /><br />
    <input type="text" name="community" placeholder="Community" required /><br />
    <textarea type="text" name="description" placeholder="Description" required ></textarea><br />
     <input type="file" name="fileupload" value="fileupload" id="fileupload" multiple>   
    <button id="submit" type="submit">
      Send!
    </button>
  </div>
</form>
@endsection