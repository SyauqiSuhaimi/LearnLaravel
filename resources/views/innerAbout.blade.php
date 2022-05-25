<h3>Inner About</h3>

@foreach ($users as $user)
<h1>{{$user}}</h1>
    
@endforeach

<script>
    var data = @json($users);
    console.log(data)
</script>