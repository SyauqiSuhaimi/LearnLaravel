<h1>API List</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Body</td>
    </tr>
    @foreach ($books as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['title']}}</td>
        <td>{{$item['body']}}</td>
    </tr>
    @endforeach
</table>