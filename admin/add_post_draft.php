<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 6/7/2018
 * Time: 11:26 AM
 */
require("init.php");

if(!$session->isSignedIn()){
    redirect("Login");
}else{
    $user = User::findById($session->userId);
}

$draft = new Draft();

if($draft){

    $draft->title = $db->escapeString($_POST['title']);
    $draft->cat_id = $_POST['cat_id'];
    $draft->author = $_POST['author'];
    $draft->keywords = $db->escapeString($_POST['keywords']);
    $draft->description = $db->escapeString($_POST['description']);
    $draft->created = date("Y-m-d H:i:s");

    $draft->setFile($_FILES['post_img']);

    if($draft->uploadPostImg()){

        echo "<h3 align='center' style='background:green;padding:7px;'>Post Uploaded Successfully</h3>";

    }else{

        echo join("<br>", $draft->errors);

    }

}else{

    echo "<h3 align='center' style='background:red;padding:7px;'>Error posting</h3>";

}
?>