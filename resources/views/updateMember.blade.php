<h1>Update Member</h1>

<form action="/update" method="POST">
    @csrf
    <div class="mb-3">
        <input type="hidden" class="form-control" name="userId" id="exampleInputId" aria-describedby="IdHelp" value="{{$data['id']}}">
      </div>
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">UserName</label>
        <input type="text" class="form-control" name="userName" id="exampleInputName" aria-describedby="NameHelp" value="{{$data['username']}}">
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="text" class="form-control" name="usermail" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['email']}}">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="userpass" class="form-control" id="exampleInputPassword1" value="{{$data['password']}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">