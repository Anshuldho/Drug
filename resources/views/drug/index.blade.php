<table class="table">
            <thead>
            <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">number</th>
                    <th scope="col">message</th>
                    <th scope="col-2 m-4">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $result)
                    <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $result->name  }}</td>
                            <td>{{ $result->number  }}</td>
                            <td>{{ $result->message  }}</td>
                            <td><a href="/messages/{{$result->id}}/edit" >edit</a></td>
                        <td> <form action="{{ route('messages.destroy', $result->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600">Delete</button>
                            </form></td>
                        </tr>
                @endforeach
            </tbody>
        </table>
