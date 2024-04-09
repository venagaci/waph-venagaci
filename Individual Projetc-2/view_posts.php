<?php
session_start();
    // Check if user is authenticated
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: form.php");
    exit;
}

// Include necessary files
require "database.php";

// Fetch username of the current user
$username = $_SESSION['username'];

// Fetch posts for the current user
$posts = getPostsByUsername($username);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Posts</title>
    
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #1877f2;
            border: 1px solid #1877f2;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        a:hover {
            background-color: #1877f2;
            color: #ffffff;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>View Posts</h1>

    <?php if ($posts): ?>
        <table>
            <thead>
                <tr>
                    
                    <th>Title</th>
                    <th>Content</th>
                    <th>Post Time</th>
                    <th>Owner</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?php echo $post['title']; ?></td>
                        <td><?php echo $post['content']; ?></td>
                        <td><?php echo $post['posttime']; ?></td>
                        <td><?php echo $post['owner']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No posts found.</p>
    <?php endif; ?>

    <a href="index.php">Back to Home</a> <!-- Added back to home link -->
</div>
</body>
</html>
