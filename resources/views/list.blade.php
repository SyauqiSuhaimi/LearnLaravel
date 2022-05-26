<h1>List View</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Action</td>
    </tr>
    @foreach ($members as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['username']}}</td>
        <td>{{$item['email']}}</td>
        <td><a href={{"delete/".$item['id']}}>Delete</a></td>
    </tr>
    @endforeach
</table>

<span>
    {{$members -> links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>