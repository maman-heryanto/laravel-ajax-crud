<table class="table">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <button type="submit" class="btn btn-warning" onclick="show({{ $item->id }})"> Update</button>
                <button type="submit" class="btn btn-danger" onclick="destroy({{ $item->id }})"> Delete</button>
            </td>
        </tr>
    @endforeach
</table>
