<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

    <h1>Add Student</h1>

    <form action="/students" method="POST">
        @csrf

        <label>First Name:</label>
        <input type="text" name="first_name" required>
        <br><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Mobile:</label>
        <input type="text" name="mobile" required>
        <br><br>

        <label>City:</label>
        <input type="text" name="city" required>
        <br><br>

        <button type="submit">Add Student</button>
    </form>

    <br>

    <a href="/students">Back to Students</a>

</body>
</html>