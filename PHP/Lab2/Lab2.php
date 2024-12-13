<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="head">
    <h1 class="title">Student Registration Form</h1>
</div>

<form action="insert_data.php" method="POST">
    <div class="form-group">
        <label for="name">Student's Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="father_name">Father's Name:</label>
        <input type="text" id="father_name" name="father_name" required>
    </div>

    <div class="form-group">
        <label for="school_name">School's Name:</label>
        <input type="text" id="school_name" name="school_name" required>
    </div>

    <div class="form-group">
        <label for="roll_no">Roll No:</label>
        <input type="text" id="roll_no" name="roll_no" required>
    </div>

    <div class="form-group">
        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required>
    </div>

    <button type="submit">Send Data</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $school_name = $_POST['school_name'];
    $roll_no = $_POST['roll_no'];
    $class = $_POST['class'];

    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO students (name, father_name, school_name, roll_no, class) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $father_name, $school_name, $roll_no, $class);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    echo "<p>The following data has been inserted into the database:</p>";
    echo "<p>Name: $name</p>";
    echo "<p>Father's Name: $father_name</p>";
    echo "<p>School's Name: $school_name</p>";
    echo "<p>Roll No: $roll_no</p>";
    echo "<p>Class: $class</p>";
}
?>

</body>
</html>