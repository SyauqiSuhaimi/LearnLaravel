<h1>Add Member</h1>

<form action="add" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputId" class="form-label">UserId</label>
        <input type="number" class="form-control" name="userId" id="exampleInputId" aria-describedby="IdHelp">
      </div>
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">UserName</label>
        <input type="text" class="form-control" name="userName" id="exampleInputName" aria-describedby="NameHelp">
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="text" class="form-control" name="usermail" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="userpass" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">