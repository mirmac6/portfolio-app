<?php

require '../../config/config.php';
include("../classes/User.php");     //dodato zbog oduzimanja broja postova
include("../classes/Post.php");     //dodato zbog oduzimanja broja postova
    
    if(isset($_GET['post_id']))
        $post_id = $_GET['post_id'];
    
    if(isset($_POST['result'])){
        if($_POST['result'] == 'true')
            $query = mysqli_query($con, "UPDATE posts SET deleted='yes' WHERE id='$post_id'");
        

// oduzimanje broja postova kada se obrise post      
//----------------------------------------------------------------------------------------------------------------------------------
            $query_user = mysqli_query($con, "SELECT added_by FROM posts WHERE id='$post_id'");
            $row = mysqli_fetch_array($query_user);
            $added_by = $row['added_by'];
            $user_obj = new User($con, $added_by);
            $num_posts = $user_obj->getNumPosts();
            if($num_posts>0){
                $num_posts--;

            }else {
                $num_posts=0;
            }
            $update_query = mysqli_query($con, "UPDATE users SET num_posts='$num_posts' WHERE username='$added_by'");
    
//----------------------------------------------------------------------------------------------------------------------------------
        
    }

?>