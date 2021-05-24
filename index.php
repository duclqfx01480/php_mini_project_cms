<!-- includes db to connect to the database -->
<?php include "includes/db.php"; ?>

<!-- includes header -->
<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                <!-- query to pull the post data from the database -->
                <?php 
                    $query = "SELECT * FROM posts";
                    $select_all_posts_query = mysqli_query($connection, $query);

                    while($row=mysqli_fetch_assoc($select_all_posts_query)){
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                    ?>

                        <!-- display post data with HTML -->
                        <h1 class="page-header">
                            Page Heading
                            <small>Secondary Text</small>
                        </h1>


                        <!-- First Blog Post -->
                        <h2>
                            <a href="#"> <?php echo $post_title?> </a>
                        </h2>

                        <p class="lead">
                            by <a href="index.php"> <?php echo $post_author?> </a>
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date?>
                        </p>

                        <hr>
                        
                        <img class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                        
                        <hr>
                        
                        <p>
                            <?php echo $post_content?> 
                        </p>
                        <a class="btn btn-primary" href="#">
                            Read More <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>

                        <hr>
                        <!-- end display post data with HTML -->

                    <?php } ?>
                <!-- / end query to pull the post data from the database -->




                


               

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

            



        </div>
        <!-- /.row -->

        <hr>


<!-- includes footer -->
<?php include "includes/footer.php"; ?>