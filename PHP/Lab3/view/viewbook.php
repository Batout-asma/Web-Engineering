<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="container">
        <h2>Book Details</h2>

        <?php if ($book): ?>
            <table>
                <tr>
                    <th>Title</th>
                    <td><?php echo $book->title; ?></td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td><?php echo $book->author; ?></td>
                </tr>
            </table>
        <?php else: ?>
            <p>No book details available.</p>
        <?php endif; ?>

    </div>
    <a href="lab3.php?action=list" class="back-button">Back to List</a>
</body>
</html>
