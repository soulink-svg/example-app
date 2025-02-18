<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>
</head>
<body>
    <h1>Student list</h1>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Birth</th>
            <th>Is Final Year</th>
            <th>Actions</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td><a href="{{ route('students.readonly', $student->id) }}">{{ $student->name }}</a></td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->birth }}</td>
            <td>{{ $student->is_final_year ? 'Yes' : 'No' }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}">
                    <button>Edit</button>
                </a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this student?');">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <!-- Create Student Button -->
    <a href="{{ route('students.create') }}">
        <button>Create Student</button>
    </a>

</body>
</html>