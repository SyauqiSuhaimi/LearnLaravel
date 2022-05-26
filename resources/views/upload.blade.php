<h1>Upload View</h1>
<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile" name="file">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">