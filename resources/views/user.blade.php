
<h1>Hello {{$name}}</h1>
{{-- {{count($users)}} --}}

{{-- @if ($users == 'ahmad')
    <h1>Hi {{$users}}</h1>
@else
    <h1>Unknown</h1>
@endif --}}

{{-- @for ($i = 0; $i < 10; $i++)
    <h2>{{$i}}</h2> <br>
@endfor --}}


@foreach ($users as $user)
<h1>{{$user}}</h1>
    
@endforeach
<a href="/"> hello </a>
<a href="/url"> about </a>
