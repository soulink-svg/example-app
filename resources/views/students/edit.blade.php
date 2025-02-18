<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="{{ $student->age }}" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ $student->address }}" required><br><br>

        <label for="birth">Birth Date:</label>
        <input type="date" id="birth" name="birth" value="{{ $student->birth }}" required><br><br>

        <label for="is_final_year">Is Final Year:</label>
        <select id="is_final_year" name="is_final_year" required>
            <option value="1" {{ $student->is_final_year ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ !$student->is_final_year ? 'selected' : '' }}>No</option>
        </select><br><br>

        <button type="submit">Update Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to List</a>
</body>
</html>