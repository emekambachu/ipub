<?php
require('init.php');

if(isset($_POST['id'])){
    
    $id = $_POST['id'];
    
    $post = Post::findById($id);

    if($post){

        $post->title = $db->escapeString($_POST['title']);
        $post->author = $_POST['author'];
        $post->cat_id = $_POST['cat_id'];
        $post->keywords = $db->escapeString($_POST['keywords']);
        $post->description = $db->escapeString($_POST['description']);
        
        if(empty($_FILES['post_img'])){
            
        $post->save();
        echo "<div align='center' style='background-color:green; width:100%; padding-top:5px; padding-bottom:5px; margin-bottom:3px;'>Is Empty</div>";
            
        }else{
            
        $post->setFile($_FILES['post_img']);
        $post->updatePostImg();
        $post->save();
            
        echo "<div align='center' style='background-color:green; width:100%; padding-top:5px; padding-bottom:5px; margin-bottom:3px; color:#fff; '>Updated</div>";
        
        }  
    }
}   

?>