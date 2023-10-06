<!DOCTYPE html>
<html>

<head>
    <title>Read Article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .post-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <?php
    include 'db_conn.php';

    $sql = "INSERT INTO posts(title, content) VALUES ('" . $_POST['title'] . "', '" . $_POST['content'] . "')";
    if ($conn->query($sql) === TRUE) {
        echo "New post created successfully!";
    } else {
        echo "ERROR";
    }

    // 게시글 HTML 출력
    echo '<div class="post-container">';
    echo '<h1>' . $_POST['title'] . '</h1>';
    echo '<p>' . $_POST['content'] . '</p>';
    echo '</div>';
    ?>

</body>

</html>