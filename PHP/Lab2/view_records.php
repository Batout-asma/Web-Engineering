<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "management");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle deletion
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $conn->query("DELETE FROM students WHERE id = $delete_id");
    echo "<script>alert('Record deleted successfully!'); window.location.href='view_records.php';</script>";
}

// Fetch all records
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Records</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="head">
        <h1 class="title">View All Records</h1>
    </div>

    <div class="table-container">
        <table>
            <tr>
                <th>Serial No</th>
                <th>Student's Name</th>
                <th>Father's Name</th>
                <th>School Name</th>
                <th>Roll No</th>
                <th>Class</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                $serial = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$serial}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['father_name']}</td>
                            <td>{$row['school_name']}</td>
                            <td>{$row['roll_no']}</td>
                            <td>{$row['class']}</td>
                            <td>
                                <a class='delete-button' href='view_records.php?delete_id={$row['id']}'>Delete</a>
                            </td>
                            <td><a class='edit-button' href='edit.php?id={$row['id']}'>Edit</a></td>
                          </tr>";
                    $serial++;
                }
            } else {
                echo "<tr><td colspan='8' class='no-records'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>

    <div class="button-container">
        <a href="Lab2.html" class="button back-button">Go Back to the Form</a>
    </div>
</body>
</html>
<?php $conn->close(); ?>
