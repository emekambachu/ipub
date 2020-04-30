<?php

require("admin/init.php");

//   
//    $post_id = trim($_POST['post_id']);
//    $author = trim($_POST['author']);
//    $body = trim($_POST['body']);
//    $created = trim($_POST['created']);
//
//
//	if($author =='' || $body == ''){
//		echo "<span style='background-color:#fc7070; padding:10px 10px 10px 10px;'>Fill all Fields</span>";
//		exit();
//	}
//	
//	 
//	$insert = "INSERT INTO `comments`
//    
//                (post_id, author, body, created)
//                VALUES
//                ('$post_id', '$author', '$body', '$created')";
//
//	$results = mysqli_query($conn, $insert);
//            
//		if(!$results ) {
//		   die('Could not enter data: ' . mysqli_error($conn));
//		}else{
//			echo "<span style='background-color:#61f8a8; padding:10px 10px 10px 10px;'>Complete. View Property <a href='View-properties'><strong>here</strong></a></span>";
//		}

//if(isset($_POST['submit'])){
//    
//        $comm = new Comment();
//
//    if($comm){
//
//        $comm->post_id = $_POST['post_id'];
//        $comm->author = trim($_POST['author']);
//        $comm->body = trim($_POST['body']);
//        $comm->created = date("Y-m-d H:i:s");
//        
//        if($comm->create()){
//            
//            echo "<h3 align='center' style='background:green;padding:7px;'>Post Uploaded Successfully</h3>";
//            
//        }else{
//            
//            echo join("<br>", $post->errors);
//            
//        }
//
//    }else{
//        
//        echo "<h3 align='center' style='background:red;padding:7px;'>Error posting</h3>";
//        
//    }
//    
//}


    
    $post_id = trim($_POST['post_id']);
    $author = trim($_POST['author']);
    $body = trim($_POST['body']);
    $created = date("Y-m-d H:i:s");
    
    $newComment = Comment::addComment($post_id, $author, $body, $created);
    
    if($newComment && $newComment->save()){

        echo "
                <div class='comment-item'>
                    <small class='block clearfix'>
                        <span>
                            Now
                        </span>
                        <a href='#'>Reply</a>
                    </small>

                    <h4>
                        $author
                    </h4>

                    <p>
                        $body
                    </p>
                </div><!-- COMMENT ITEM ENDS -->
        ";
        
    }else{
        
        echo "<div style='background-color:red; width:100%; padding-top:5px; padding-bottom:5px; margin-bottom:3px;'>Red</div>";
        
    }

?>