<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h1>Edit Student</h1>

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>First Name:</label>
        <input type="text" name="first_name" value="{{ $student->first_name }}" required>
        <br><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" value="{{ $student->last_name }}" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $student->email }}" required>
        <br><br>

        <label>Mobile:</label>
        <input type="text" name="mobile" value="{{ $student->mobile }}" required>
        <br><br>

        <label>City:</label>
        <input type="text" name="city" value="{{ $student->city }}" required>
        <br><br>

        <button type="submit">Update Student</button>
    </form>

    <br>

    <a href="/students">Back to Students</a>

</body>
</html>