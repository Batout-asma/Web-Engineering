<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="container">
        <h2>Book List</h2>

        <?php if ($books): ?>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $index => $book): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $book->title; ?></td>
                            <td><?php echo $book->author; ?></td>
                            <td>
                            <a href="lab3.php?action=view&id=<?php echo $book->id; ?>"class="view-button">View</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No books found.</p>
        <?php endif; ?>
    </div>
    <a href="../index.html" class="back-button">Go Back</a>
</body>
</html>
