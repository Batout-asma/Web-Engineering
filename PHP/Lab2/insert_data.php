<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $school_name = $_POST['school_name'];
    $roll_no = $_POST['roll_no'];
    $class = $_POST['class'];

    $servername = "localhost";
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class='table-container'>
        <h2>The following data has been inserted into the database:</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Father's Name</th>
                <th>School Name</th>
                <th>Roll No</th>
                <th>Class</th>
            </tr>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $father_name; ?></td>
                <td><?php echo $school_name; ?></td>
                <td><?php echo $roll_no; ?></td>
                <td><?php echo $class; ?></td>
            </tr>
        </table>
    </div>

    <div class="button-container">
        <a href="Lab2.html" class="button">Go Back to the Form</a>
        <a href="view_records.php" class="button">Check all the Records</a>
    </div>

</body>
</html>

<?php
}
?>
