
  @extends('layouts.editbase')

@section('editor')
<form action="adminGuides.html" id="contact">
  <div class="container">
    <div class="head">
      <h2>Guide</h2>
    </div>
    <input type="text" name="name" placeholder="Name" required /><br />
    <input type="text" name="language" placeholder="Languages" required /><br />
    <input type="text" name="address" placeholder="Address" required /><br />
    <input type="text" name="contact" placeholder="Contact" required /><br />
    <input  type="email" name="email" placeholder="Email" required /><br />
    <input type="text" name="website" placeholder="Website" /><br />
    <input  type="text" name="experience" placeholder="Experience" required /><br />
    <input type="text" name="age" placeholder="Age" required /><br />
    <input type="text" name="gender" placeholder="Gender" required /><br />
    <input type="text" name="expenses" placeholder="Expenses" required /><br />
     <textarea type="text" name="bio" placeholder="Bio" required ></textarea><br />
    <textarea type="text" name="description" placeholder="Description" required ></textarea><br />
      <input type="file" name="fileupload" value="fileupload" id="fileupload" multiple>  
    <button id="submit" type="submit">
      Send!
    </button>
  </div>
</form>
@endsection