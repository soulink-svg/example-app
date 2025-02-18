<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>

    <p><strong>ID:</strong> {{ $student->id }}</p>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Age:</strong> {{ $student->age }}</p>
    <p><strong>Address:</strong> {{ $student->address }}</p>
    <p><strong>Birth Date:</strong> {{ $student->birth }}</p>
    <p><strong>Is Final Year:</strong> {{ $student->is_final_year ? 'Yes' : 'No' }}</p>

    <a href="{{ route('students.index') }}">Back to List</a>
</body>
</html>
