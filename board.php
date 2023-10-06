<!DOCTYPE html>
<html>

<head>
    <title>Article List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .post-list {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, k 0, 0.1);
        }

        .post-item {
            margin-bottom: 10px;
        }

        .post-title {
            color: #333;
            font-size: 18px;
            font-weight: bold;
        }

        .post-content {
            color: #555;
        }
    </style>
</head>

<body>
    <div class="post-list">
        <h1>게시글 목록</h1>
        <?php
        include 'db_conn.php';
        $sql = "SELECT title, content FROM posts WHERE 1 LIMIT 0,10";
        $res = $conn->query($sql);

        // 게시글 데이터 배열
        $posts = $res->fetch_all(MYSQLI_ASSOC);

        // 게시글 목록 출력
        foreach ($posts as $post) {
            echo '<div class="post-item">';
            echo '<h2 class="post-title">' . $post['title'] . '</h2>';
            echo '<p class="post-content">' . $post['content'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
    <!-- 게시글 검색 폼 -->
    <form method="GET" action="list.php">
        <input type="text" name="search" placeholder="게시글 검색">
        <input type="submit" value="검색">
    </form>
</body>

</html>
</body>

</html>