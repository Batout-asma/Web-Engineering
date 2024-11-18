
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $school_name = $_POST['school_name'];
    $roll_no = $_POST['roll_no'];
    $class = $_POST['class'];

    $servername = "Localhost";
    $username = "root";
    $password = "";
    $dbname = "management";

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