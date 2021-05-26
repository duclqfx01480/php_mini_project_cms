<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Author</th>
            <th>Title</th>
            <th>Category</th>
            <th>Status</th>
            <th>Image</th>
            <th>Tags</th>
            <th>Comments</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    
    <!-- Display all posts here -->

    <tbody>
        <?php
            $query = "SELECT * FROM posts";
            $select_posts = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_posts)){
                $post_id = $row['post_id'];
                $post_category_id = $row['post_category_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_tags = $row['post_tags'];
                $post_comment_count = $row['post_comment_count'];
                $post_status = $row['post_status'];

                echo "<tr>";
                echo "<td>$post_id</td>";
                echo "<td>$post_author</td>";
                echo "<td>$post_title</td>";
                echo "<td>$post_category_id</td>";
                echo "<td>$post_status</td>";
                echo "<td><img src='../images/$post_image' alt='image in the post' width='100'/></td>";
                echo "<td>$post_tags</td>";
                echo "<td>$post_comment_count</td>";
                echo "<td>$post_date</td>";
                echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                echo "</tr>";

            }
        ?>
    </tbody>
</table>

<?php
    if(isset($_GET['delete'])){
        $post_id_to_delete = $_GET['delete'];
        echo "Are you sure to delete post #" . $post_id_to_delete;

    }
?>