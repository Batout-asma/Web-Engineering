<?php
$conn = new mysqli("localhost", "root", "", "management");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM students WHERE id = $id");
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Record</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="POST" class="edit-form">
        <h2>Edit Student Record</h2>
        <label>Student's Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

        <label>Father's Name:</label>
        <input type="text" name="father_name" value="<?php echo $row['father_name']; ?>" required>

        <label>School's Name:</label>
        <input type="text" name="school_name" value="<?php echo $row['school_name']; ?>" required>

        <label>Roll No:</label>
        <input type="text" name="roll_no" value="<?php echo $row['roll_no']; ?>" required>

        <label>Class:</label>
        <input type="text" name="class" value="<?php echo $row['class']; ?>" required>

        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $father_name = $_POST['father_name'];
        $school_name = $_POST['school_name'];
        $roll_no = $_POST['roll_no'];
        $class = $_POST['class'];

        $sql = "UPDATE students SET name='$name', father_name='$father_name', school_name='$school_name', roll_no='$roll_no', class='$class' WHERE id=$id";
        $conn->query($sql);

        echo "<script>alert('Record updated successfully!'); window.location.href='view_records.php';</script>";
    }
    $conn->close();
    ?>
</body>
</html>
