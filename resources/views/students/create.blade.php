<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>
    
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="birth">Birth:</label>
        <input type="date" id="birth" name="birth" required><br><br>

        <label for="is_final_year">Is Final Year:</label>
        <select id="is_final_year" name="is_final_year">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select><br><br>

        <button type="submit">Save Student</button>
    </form>

    <a href="{{ route('students.index') }}">Back to List</a>
</body>
</html>