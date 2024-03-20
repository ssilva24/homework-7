<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
</head>

<body>
    <h2>success for Posts</h2>
    
    <?php
        if (isset($_GET['success'])) 
        {
            echo "<p>Post has been created!</p>";
        }
    ?>

    <?php foreach ($posts as $post): ?>
        <div>
            <h3>
                <?php echo $post['name']; ?>
            </h3>

            <p><?php echo $post['description']; ?></p>
        </div>
    <?php endforeach; ?>

</body>
</html>
